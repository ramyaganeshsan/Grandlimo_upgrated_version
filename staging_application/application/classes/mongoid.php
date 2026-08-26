<?php defined('SYSPATH') OR die('No Direct Script Access');

/**
 * PECL mongo MongoId compatibility wrapping MongoDB\BSON\ObjectId.
 */
class MongoId
{
    private $oid;

    public function __construct($id = null)
    {
        if ($id instanceof MongoDB\BSON\ObjectId) {
            $this->oid = $id;
            return;
        }

        if ($id === null || $id === '') {
            $this->oid = new MongoDB\BSON\ObjectId();
            return;
        }

        $this->oid = new MongoDB\BSON\ObjectId((string) $id);
    }

    public function __toString()
    {
        return (string) $this->oid;
    }

    public function getTimestamp()
    {
        return $this->oid->getTimestamp();
    }

    public function toObjectId()
    {
        return $this->oid;
    }
}
