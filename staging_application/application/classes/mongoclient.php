<?php defined('SYSPATH') OR die('No Direct Script Access');

/**
 * PECL mongo MongoClient compatibility using the mongodb extension.
 */
class MongoClient
{
    private $manager;
    private $server;

    public function __construct($server = 'mongodb://localhost:27017', array $options = [])
    {
        $this->server = $server;
        $driver_options = [];
        if (isset($options['username']) || isset($options['password'])) {
            $driver_options = $options;
        }
        unset($driver_options['connect'], $driver_options['persist'], $driver_options['persist_key']);
        $this->manager = new MongoDB\Driver\Manager($server, $driver_options);
    }

    public function selectDB($name)
    {
        return new MongoDBLegacyDatabase($this->manager, $name);
    }

    public function __get($name)
    {
        return $this->selectDB($name);
    }

    public function getManager()
    {
        return $this->manager;
    }
}

/**
 * Minimal PECL MongoDB (database) stand-in. Named to avoid colliding with the MongoDB\ namespace.
 */
class MongoDBLegacyDatabase
{
    private $manager;
    private $name;

    public function __construct(MongoDB\Driver\Manager $manager, $name)
    {
        $this->manager = $manager;
        $this->name = $name;
    }

    public function selectCollection($name)
    {
        return new MongoDBLegacyCollection($this->manager, $this->name, $name);
    }

    public function __get($name)
    {
        return $this->selectCollection($name);
    }

    public function getManager()
    {
        return $this->manager;
    }

    public function getName()
    {
        return $this->name;
    }
}

class MongoDBLegacyCollection
{
    private $manager;
    private $db;
    private $name;

    public function __construct(MongoDB\Driver\Manager $manager, $db, $name)
    {
        $this->manager = $manager;
        $this->db = $db;
        $this->name = $name;
    }

    public function insertOne($document)
    {
        $bulk = new MongoDB\Driver\BulkWrite();
        $id = $bulk->insert($document);
        $this->manager->executeBulkWrite($this->db . '.' . $this->name, $bulk);
        return $id;
    }

    public function updateOne($filter, $update)
    {
        $bulk = new MongoDB\Driver\BulkWrite();
        $bulk->update($filter, $update, ['multi' => false]);
        return $this->manager->executeBulkWrite($this->db . '.' . $this->name, $bulk);
    }

    public function deleteMany($filter)
    {
        $bulk = new MongoDB\Driver\BulkWrite();
        $bulk->delete($filter, ['limit' => 0]);
        return $this->manager->executeBulkWrite($this->db . '.' . $this->name, $bulk);
    }

    public function deleteOne($filter)
    {
        $bulk = new MongoDB\Driver\BulkWrite();
        $bulk->delete($filter, ['limit' => 1]);
        return $this->manager->executeBulkWrite($this->db . '.' . $this->name, $bulk);
    }

    public function find($filter = [], array $options = [])
    {
        $query = new MongoDB\Driver\Query($filter, $options);
        return $this->manager->executeQuery($this->db . '.' . $this->name, $query);
    }

    public function findOne($filter = [], array $options = [])
    {
        $options['limit'] = 1;
        $cursor = $this->find($filter, $options);
        foreach ($cursor as $doc) {
            return $doc;
        }
        return null;
    }

    public function createIndex($keys, array $options = [])
    {
        $cmd = ['createIndexes' => $this->name, 'indexes' => [array_merge($options, ['key' => $keys, 'name' => isset($options['name']) ? $options['name'] : implode('_', array_keys((array) $keys))])]];
        return $this->manager->executeCommand($this->db, new MongoDB\Driver\Command($cmd));
    }
}
