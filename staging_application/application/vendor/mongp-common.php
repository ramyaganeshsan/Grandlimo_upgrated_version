<?php
/*try
{
	$conn = new MongoClient("mongodb://localhost:27017");
	// select a database
	$database = 'taximobility';
	$mdb = $conn->$database;
}
catch(MongoConnectionException $e) 
{
   die('Failed to connect to MongoDB '.$e->getMessage());
}*/
class mongoConnection
{
    static $db = NULL;

    static function getMongoConnection()
    {
        if (self::$db === null)
        {
            try {
                $m = new \MongoDB\Client('mongodb://localhost:27017');
               // $m = new MongoClient('mongodb://192.168.1.105:27017');

            } catch (\Exception $e) {
                die('Failed to connect to MongoDB '.$e->getMessage());
            }
            self::$db = $m;
        }

        return self::$db;
    }
}
