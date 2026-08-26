<?php defined('SYSPATH') OR die('No Direct Script Access');

/**
 * Kohana MangoDB compatibility layer using the mongodb PHP extension
 * (MongoDB\Driver\Manager) instead of the removed PECL mongo MongoClient API.
 *
 * Call sites keep using MangoDB::instance('default')->find/insert/update/remove/aggregate.
 */
class MangoDB
{
    protected static $_instances = [];

    protected $_name;
    protected $_config;
    protected $_manager;
    protected $_database;
    protected $_typeMap = [
        'root' => 'array',
        'document' => 'array',
        'array' => 'array',
    ];

    public static function instance($name = 'default', array $config = NULL)
    {
        if (!isset(self::$_instances[$name])) {
            if ($config === NULL) {
                $config = self::load_config($name);
            }
            new MangoDB($name, $config);
        }

        return self::$_instances[$name];
    }

    protected static function load_config($name)
    {
        $defaults = [
            'connection' => [
                'server' => getenv('MONGODB_URI') ?: 'mongodb://localhost:27017',
                'database' => getenv('MONGODB_DATABASE') ?: 'GrandLimoDemo',
                'options' => [],
            ],
        ];

        if (class_exists('Kohana') && isset(Kohana::$config)) {
            try {
                $group = Kohana::$config->load('mangoDB');
                if ($group) {
                    if (is_object($group) && isset($group->$name)) {
                        return $group->$name;
                    }
                    if (is_array($group) && isset($group[$name])) {
                        return $group[$name];
                    }
                }
            } catch (Exception $e) {
            }
        }

        return $defaults;
    }

    public function __construct($name, array $config)
    {
        $this->_name = $name;
        $this->_config = $config;
        self::$_instances[$name] = $this;
    }

    protected function _manager()
    {
        if ($this->_manager !== NULL) {
            return $this->_manager;
        }

        $conn = isset($this->_config['connection']) ? $this->_config['connection'] : $this->_config;
        $server = isset($conn['server']) ? $conn['server'] : (isset($conn['dsn']) ? $conn['dsn'] : 'mongodb://localhost:27017');
        $this->_database = isset($conn['database']) ? $conn['database'] : (isset($conn['db']) ? $conn['db'] : 'GrandLimoDemo');
        $options = isset($conn['options']) && is_array($conn['options']) ? $conn['options'] : [];
        unset($options['connect'], $options['persist'], $options['persist_key']);

        $this->_manager = new MongoDB\Driver\Manager($server, $options);
        return $this->_manager;
    }

    protected function _ns($collection)
    {
        $this->_manager();
        return $this->_database . '.' . $collection;
    }

    public static function normalize_projection($fields)
    {
        if (empty($fields)) {
            return [];
        }

        $numeric = true;
        foreach ($fields as $key => $value) {
            if (!is_int($key)) {
                $numeric = false;
                break;
            }
        }

        if (!$numeric) {
            return $fields;
        }

        $projection = [];
        foreach ($fields as $field) {
            if (is_string($field) && $field !== '') {
                $projection[$field] = 1;
            }
        }
        return $projection;
    }

    public static function bson_to_legacy($value)
    {
        if ($value instanceof MongoDB\BSON\UTCDateTime) {
            return new MongoDate($value);
        }
        if ($value instanceof MongoDB\BSON\ObjectId) {
            return $value;
        }
        if ($value instanceof MongoDB\BSON\Regex) {
            return new MongoRegex($value);
        }
        if ($value instanceof MongoDB\Model\BSONDocument || $value instanceof MongoDB\Model\BSONArray || $value instanceof ArrayObject) {
            $value = $value->getArrayCopy();
        }
        if (is_object($value) && $value instanceof stdClass) {
            $value = (array) $value;
        }
        if (is_array($value)) {
            foreach ($value as $k => $v) {
                $value[$k] = self::bson_to_legacy($v);
            }
        }
        return $value;
    }

    public static function legacy_to_bson($value)
    {
        if ($value instanceof MongoDate) {
            return $value->toUTCDateTime();
        }
        if ($value instanceof MongoRegex) {
            return $value->toBSONRegex();
        }
        if ($value instanceof MongoId) {
            return $value->toObjectId();
        }
        if (is_array($value)) {
            foreach ($value as $k => $v) {
                $value[$k] = self::legacy_to_bson($v);
            }
        }
        return $value;
    }

    public function find($collection_name, array $query = [], array $fields = [])
    {
        return new MangoDB_Cursor(
            $this->_manager(),
            $this->_ns($collection_name),
            self::legacy_to_bson($query),
            self::normalize_projection($fields),
            $this->_typeMap
        );
    }

    public function find_one($collection_name, array $query = [], array $fields = [])
    {
        $options = ['limit' => 1, 'typeMap' => $this->_typeMap];
        $projection = self::normalize_projection($fields);
        if ($projection) {
            $options['projection'] = $projection;
        }
        $query = new MongoDB\Driver\Query(self::legacy_to_bson($query), $options);
        $cursor = $this->_manager()->executeQuery($this->_ns($collection_name), $query);
        foreach ($cursor as $doc) {
            return self::bson_to_legacy($doc);
        }
        return null;
    }

    public function insert($collection_name, array $a, array $options = [])
    {
        $document = self::legacy_to_bson($a);
        $bulk = new MongoDB\Driver\BulkWrite();
        $id = $bulk->insert($document);
        $this->_manager()->executeBulkWrite($this->_ns($collection_name), $bulk);
        if (!isset($a['_id'])) {
            $a['_id'] = $id;
        }
        return ['ok' => 1, 'n' => 1, '_id' => isset($a['_id']) ? $a['_id'] : $id];
    }

    public function batch_insert($collection_name, array $documents, array $options = [])
    {
        $bulk = new MongoDB\Driver\BulkWrite();
        foreach ($documents as $doc) {
            $bulk->insert(self::legacy_to_bson($doc));
        }
        $result = $this->_manager()->executeBulkWrite($this->_ns($collection_name), $bulk);
        return ['ok' => 1, 'n' => $result->getInsertedCount()];
    }

    public function update($collection_name, array $criteria, array $newobj, array $options = [])
    {
        $multiple = !empty($options['multiple']);
        $upsert = !empty($options['upsert']);
        $criteria = self::legacy_to_bson($criteria);
        $newobj = self::legacy_to_bson($newobj);

        $first = null;
        foreach ($newobj as $key => $unused) {
            $first = $key;
            break;
        }
        $is_operator = is_string($first) && isset($first[0]) && $first[0] === '$';

        $bulk = new MongoDB\Driver\BulkWrite();
        $update_options = [
            'multi' => $is_operator ? (bool) $multiple : false,
            'upsert' => (bool) $upsert,
        ];
        $bulk->update($criteria, $newobj, $update_options);
        $result = $this->_manager()->executeBulkWrite($this->_ns($collection_name), $bulk);

        return [
            'ok' => 1,
            'n' => $result->getMatchedCount(),
            'nModified' => $result->getModifiedCount(),
            'updatedExisting' => $result->getMatchedCount() > 0 && $result->getUpsertedCount() === 0,
            'upserted' => $result->getUpsertedIds(),
        ];
    }

    public function remove($collection_name, array $criteria = [], array $options = [])
    {
        $just_one = !empty($options['justOne']);
        $bulk = new MongoDB\Driver\BulkWrite();
        $bulk->delete(self::legacy_to_bson($criteria), ['limit' => $just_one ? 1 : 0]);
        $result = $this->_manager()->executeBulkWrite($this->_ns($collection_name), $bulk);
        return ['ok' => 1, 'n' => $result->getDeletedCount()];
    }

    public function save($collection_name, array $a, array $options = [])
    {
        if (isset($a['_id'])) {
            return $this->update($collection_name, ['_id' => $a['_id']], $a, ['upsert' => true]);
        }
        return $this->insert($collection_name, $a, $options);
    }

    public function count($collection_name, array $query = [])
    {
        $pipeline = [];
        $query = self::legacy_to_bson($query);
        if ($query) {
            $pipeline[] = ['$match' => $query];
        }
        $pipeline[] = ['$count' => 'n'];
        $result = $this->aggregate($collection_name, $pipeline);
        if (!empty($result['result'][0]['n'])) {
            return (int) $result['result'][0]['n'];
        }
        return 0;
    }

    public function aggregate($collection_name, array $pipeline, array $options = [])
    {
        $pipeline = self::legacy_to_bson($pipeline);
        $command = [
            'aggregate' => $collection_name,
            'pipeline' => array_values($pipeline),
            'cursor' => new stdClass(),
            'allowDiskUse' => true,
        ];
        foreach ($options as $key => $value) {
            $command[$key] = $value;
        }
        $cursor = $this->_manager()->executeCommand($this->_database, new MongoDB\Driver\Command($command));
        $cursor->setTypeMap($this->_typeMap);
        $docs = [];
        foreach ($cursor as $doc) {
            $docs[] = self::bson_to_legacy($doc);
        }
        return ['ok' => 1, 'result' => $docs];
    }

    public function command(array $data)
    {
        $cursor = $this->_manager()->executeCommand($this->_database, new MongoDB\Driver\Command(self::legacy_to_bson($data)));
        $cursor->setTypeMap($this->_typeMap);
        $docs = [];
        foreach ($cursor as $doc) {
            $docs[] = self::bson_to_legacy($doc);
        }
        return isset($docs[0]) ? $docs[0] : [];
    }

    public function ensure_index($collection_name, $keys, array $options = [])
    {
        $name = isset($options['name']) ? $options['name'] : implode('_', array_keys((array) $keys));
        $index = array_merge($options, ['key' => $keys, 'name' => $name]);
        $cmd = new MongoDB\Driver\Command([
            'createIndexes' => $collection_name,
            'indexes' => [$index],
        ]);
        $this->_manager()->executeCommand($this->_database, $cmd);
        return true;
    }

    public function get_database_name()
    {
        $this->_manager();
        return $this->_database;
    }

    public function get_manager()
    {
        return $this->_manager();
    }
}
