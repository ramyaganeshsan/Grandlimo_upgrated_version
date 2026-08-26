<?php defined('SYSPATH') OR die('No Direct Script Access');

/**
 * PECL mongo MongoRegex compatibility for PHP 8.2 + mongodb extension.
 */
class MongoRegex implements MongoDB\BSON\Type, MongoDB\BSON\Serializable
{
    public $regex;
    public $flags = '';

    public function __construct($regex)
    {
        if ($regex instanceof MongoDB\BSON\Regex) {
            $this->regex = $regex->getPattern();
            $this->flags = $regex->getFlags();
            return;
        }

        if (is_string($regex) && preg_match('#^/(.*)/([imsxuADSUXJ]*)$#s', $regex, $m)) {
            $this->regex = $m[1];
            $this->flags = $m[2];
            return;
        }

        $this->regex = (string) $regex;
        $this->flags = '';
    }

    public function toBSONRegex()
    {
        return new MongoDB\BSON\Regex($this->regex, $this->flags);
    }

    #[\ReturnTypeWillChange]
    public function bsonSerialize()
    {
        return $this->toBSONRegex();
    }

    public function __toString()
    {
        return '/' . $this->regex . '/' . $this->flags;
    }
}
