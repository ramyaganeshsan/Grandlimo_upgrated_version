<?php defined('SYSPATH') OR die('No Direct Script Access');

/**
 * Lazy MongoDB cursor compatible with PECL MongoCursor (sort/skip/limit/count + foreach).
 */
class MangoDB_Cursor implements IteratorAggregate, Countable
{
    private $manager;
    private $namespace;
    private $filter;
    private $projection;
    private $typeMap;
    private $sort = [];
    private $skip = 0;
    private $limit = 0;

    public function __construct(MongoDB\Driver\Manager $manager, $namespace, array $filter, array $projection, array $typeMap)
    {
        $this->manager = $manager;
        $this->namespace = $namespace;
        $this->filter = $filter;
        $this->projection = $projection;
        $this->typeMap = $typeMap;
    }

    public function sort(array $fields)
    {
        $this->sort = $fields;
        return $this;
    }

    public function skip($n)
    {
        $this->skip = (int) $n;
        return $this;
    }

    public function limit($n)
    {
        $this->limit = (int) $n;
        return $this;
    }

    public function hint($index)
    {
        return $this;
    }

    public function timeout($ms)
    {
        return $this;
    }

    protected function options()
    {
        $options = ['typeMap' => $this->typeMap];
        if ($this->projection) {
            $options['projection'] = $this->projection;
        }
        if ($this->sort) {
            $options['sort'] = $this->sort;
        }
        if ($this->skip) {
            $options['skip'] = $this->skip;
        }
        if ($this->limit) {
            $options['limit'] = $this->limit;
        }
        return $options;
    }

    protected function execute()
    {
        $query = new MongoDB\Driver\Query($this->filter, $this->options());
        return $this->manager->executeQuery($this->namespace, $query);
    }

    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        $docs = [];
        foreach ($this->execute() as $doc) {
            $docs[] = MangoDB::bson_to_legacy($doc);
        }
        return new ArrayIterator($docs);
    }

    #[\ReturnTypeWillChange]
    public function count($foundOnly = false)
    {
        if ($foundOnly && ($this->skip || $this->limit)) {
            return iterator_count($this->getIterator());
        }

        $parts = explode('.', $this->namespace, 2);
        $db = $parts[0];
        $collection = isset($parts[1]) ? $parts[1] : $this->namespace;
        $pipeline = [];
        if ($this->filter) {
            $pipeline[] = ['$match' => $this->filter];
        }
        $pipeline[] = ['$count' => 'n'];
        $cmd = new MongoDB\Driver\Command([
            'aggregate' => $collection,
            'pipeline' => $pipeline,
            'cursor' => new stdClass(),
        ]);
        $cursor = $this->manager->executeCommand($db, $cmd);
        $cursor->setTypeMap($this->typeMap);
        foreach ($cursor as $doc) {
            return isset($doc['n']) ? (int) $doc['n'] : 0;
        }
        return 0;
    }
}
