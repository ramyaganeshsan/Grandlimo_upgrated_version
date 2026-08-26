<?php

/**
 * MONGO DB WRAPPER — mongodb extension (PHP 8.2+)
 */
namespace Database;

class Mongo{
     
    private $db;
    private $collection;
    private $query;
    private $result;
    private $last_insert;
    private $pending_filter = [];
    private $pending_projection = null;
    private $pending_sort = [];
    private $pending_skip = 0;
    private $pending_limit = 0;
    
    use \Singleton;
    
    public function __construct($host, $user, $pwd, $db){
        try{
            $userpass = strlen($user)? $user.":".$pwd."@" : "";
            if (class_exists('\\MongoDB\\Client')) {
                $dbcon = new \MongoDB\Client("mongodb://{$userpass}{$host}");
                $this->db = $dbcon->$db;
            } else {
                $manager = new \MongoDB\Driver\Manager("mongodb://{$userpass}{$host}");
                $this->db = new \MongoDBLegacyDatabase($manager, $db);
            }
        }catch(\Exception $e){
            echo $e->getCode()." - ".$e->getMessage();
            die();
        }
    }

    /**
     * insert a new doc in the collection
     * @param $data array
     * @return $this
     */
    public function insert($data, $opts = []){
            
        $data['_id'] = (!isset($data['_id']))? new \MongoDB\BSON\ObjectId() : $data['_id'];
        try{
            if (method_exists($this->collection, 'insertOne')) {
                $this->collection->insertOne($data);
            } else {
                $this->collection->insert($data);
            }
            $this->last_insert = $data['_id'];
            return $this;
        }catch(\Exception $e){
            echo "INSERT ERROR". $e->getMessage()." ".$e->getCode();
        }
    }
    
    /**
     * returns the last inserted document's id
     * @return \MongoDB\BSON\ObjectId
     */
    public function last_id(){
        return $this->last_insert;
    }
    
    /**
     * search a collection
     * @param $params array fields to search by
     * @param $fields array, the fields to return
     * @return $this
     */
    public function find($params=[], $fields=null){
        $this->pending_filter = $params;
        $this->pending_projection = $fields;
        $this->pending_sort = [];
        $this->pending_skip = 0;
        $this->pending_limit = 0;
        $this->result = null;
        return $this;
    }

    protected function find_options()
    {
        $options = [];
        if ($this->pending_projection !== null) {
            $options['projection'] = $this->pending_projection;
        }
        if ($this->pending_sort) {
            $options['sort'] = $this->pending_sort;
        }
        if ($this->pending_skip) {
            $options['skip'] = $this->pending_skip;
        }
        if ($this->pending_limit) {
            $options['limit'] = $this->pending_limit;
        }
        return $options;
    }

    protected function execute_find()
    {
        if ($this->result !== null) {
            return $this->result;
        }
        $options = $this->find_options();
        if (method_exists($this->collection, 'find')) {
            $this->result = $this->collection->find($this->pending_filter, $options);
        } else {
            $this->result = [];
        }
        return $this->result;
    }
    /**
     * returns the last collection search num docs found
     * @return int
     */
    public function count(){
        if (method_exists($this->collection, 'countDocuments')) {
            return $this->collection->countDocuments($this->pending_filter);
        }
        return iterator_count($this->execute_find());
    }
    
    
    /**
     * sort a result set by something
     * @param $sort array to sort by
     * @return $this
     */
    public function sort($sort = []){
        $this->pending_sort = $sort;
        $this->result = null;
        return $this;
    }
    
    /**
     * limit the query subset
     * @param $skip int default 0
     * @param $set int default 30
     * @return $this
     */
    public function limit($skip = 0, $set = 30){
        $this->pending_skip = (int) $skip;
        $this->pending_limit = (int) $set;
        $this->result = null;
        return $this;
    }
    
    /**
     * update a subset based on a rule
     * @param $select array to select by
     * @param $set array fields to set
     * @return $this
     */
     
    public function update($select = [], $set = []){
        if (method_exists($this->collection, 'updateMany')) {
            $this->collection->updateMany($select, ['$set'=>$set]);
        } else {
            $this->collection->update($select, ['$set'=>$set], ['multi' => true]);
        }
        return $this;
    }
    
    private function update_array($select = [], $opts = []){
        if (method_exists($this->collection, 'updateMany')) {
            $this->collection->updateMany($select, $opts);
        } else {
            $this->collection->update($select, $opts, ['multi' => true]);
        }
        return $this;
    }
    
    public function addToSet($select = [], $addToSet){
        return $this->update_array($select, ['$addToSet'=>$addToSet]);
    }
    
    public function push($select = [], $push){
        return $this->update_array($select, ['$push'=>$push]);
    }
    
    /**
     * performs a collection select
     * @param $collection string
     * @return $this
     */
    public function select($collection){
        $this->collection = $this->db->$collection;
        return $this;
    }
    
    /**
     * 
     * performs a subcollection select
     * @param $collection
     * @return $this
     */
    public function subselect($collection){
        $this->collection = $this->collection->$collection;
        return $this;
    }
    
    /**
     * search a collection
     * @param $params array fields to search by
     * @return row
     */
    public function findOne($params = [], $fields = []){
        $options = count($fields) ? ['projection' => $fields] : [];
        if (method_exists($this->collection, 'findOne')) {
            return $this->collection->findOne($params, $options);
        }
        $options['limit'] = 1;
        foreach ($this->collection->find($params, $options) as $doc) {
            return $doc;
        }
        return null;
    }
    
    /**
     * find docs in a collection and modify them by criteria
     * @param $query array to search by
     * @param $update array fields to update
     * @param $fields array fields to return after update
     * @return array result set
     */
    public function findAndModify($query, $update, $fields=[]){
        if (method_exists($this->collection, 'findOneAndUpdate')) {
            $options = ['returnDocument' => 2];
            if ($fields) {
                $options['projection'] = $fields;
            }
            return $this->collection->findOneAndUpdate($query, $update, $options);
        }
        $cmd = new \MongoDB\Driver\Command([
            'findAndModify' => $this->collection,
            'query' => $query,
            'update' => $update,
            'new' => true,
            'fields' => $fields,
        ]);
        return null;
    }
    
    /**
     * return the result set after a find or findOne
     * @return array
     */
    public function result(){
        $list = [];
        foreach($this->execute_find() as $doc){
            $list[] = $doc;
        }
        return $list;
    }
    
    
    /**
     * removes documents based on $params from a collection
     * @param $params array with the criteria to remove by
     * @return $this
     */    
    public function remove($params=[]){
        if (method_exists($this->collection, 'deleteMany')) {
            $this->collection->deleteMany($params);
        } else {
            $this->collection->remove($params);
        }
        return $this;
    }
    
    /**
     * insert or update object. The object itself must be save()-d before use
     * @param $obj the object to insert
     */
    public function commitObject($obj, $select_rule = null){
            
        $reflection = new \ReflectionClass($obj);
        
        if(!$reflection->hasProperty('elements') || !$reflection->hasMethod('setValidationError') || !$reflection->hasMethod('getValidationError')){
            trigger_error("Object does not implement the Validation Scheme or it has not been saved!", E_USER_WARNING);
            return $this;
        }
        
        if(!count($obj->elements)){
            trigger_error("Object has not been saved or is empty.", E_USER_WARNING);
            return $this;
        }
        
        
        if($obj->hasValidationErrors()){
            $e = '';
            while($error = $obj->getValidationError()){
                $e .= $obj->validationScheme."::".$error["scheme"]."::".$error["error"]."<br/>";
            }
            trigger_error("Object did not validate against the schema: <br/>".$e, E_USER_WARNING);
            echo "<pre>";
            print_r($obj->elements);
            echo "</pre>";
            return $this;
            
        }
        
        if(isset($obj->memberOf) && !isset($obj->parentID)){
            trigger_error("Object should be an array member of {$obj->memberOf} but you haven't declared it's parentID: <br/>", E_USER_WARNING);
            return $this;
        }
        
        $selector = false;
        
        if((isset($obj->parentID) || $select_rule !== null)){
            $selector = $select_rule !== null ? $select_rule : ['_id'=>$obj->parentID];
        }
        
        if(isset($obj->collection)){
            $this->select($obj->collection);
        }
        
        if($selector != false && isset($obj->memberOf)){
            //we need to insert this item in an array that is part of a collection
            $addToSet = [$obj->memberOf=>$obj->elements];
            return $this->addToSet($selector, $addToSet);
        
        }else if($selector != false){
            //we need to update the object in a collection
            return $this->update($selector, $obj->elements);
        
        }else{
            // just insert in whatever collection was previously selected
            return $this->insert($obj->elements);    
        }
        
    }
 }
