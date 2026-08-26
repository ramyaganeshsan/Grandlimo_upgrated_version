<?php defined('SYSPATH') OR die('No Direct Script Access');

/**
 * PECL mongo MongoDate compatibility for PHP 8.2 + mongodb extension.
 * BSON-encodes as UTCDateTime. Exposes ->sec / ->usec like the old extension.
 */
class MongoDate implements MongoDB\BSON\Type, MongoDB\BSON\Serializable, MongoDB\BSON\Unserializable
{
    public $sec;
    public $usec = 0;

    public function __construct($seconds = null, $usec = 0)
    {
        if ($seconds instanceof MongoDB\BSON\UTCDateTime) {
            $ms = (int) (string) $seconds;
            $this->sec = intdiv($ms, 1000);
            $this->usec = ($ms % 1000) * 1000;
            return;
        }

        if ($seconds === null) {
            $mt = microtime(true);
            $this->sec = (int) $mt;
            $this->usec = (int) round(($mt - $this->sec) * 1000000);
            return;
        }

        $this->sec = (int) $seconds;
        $this->usec = (int) $usec;
    }

    public function toDateTime()
    {
        return $this->toUTCDateTime()->toDateTime();
    }

    public function toUTCDateTime()
    {
        return new MongoDB\BSON\UTCDateTime($this->sec * 1000 + (int) floor($this->usec / 1000));
    }

    #[\ReturnTypeWillChange]
    public function bsonSerialize()
    {
        return $this->toUTCDateTime();
    }

    public function bsonUnserialize(array $data)
    {
        if (isset($data['milliseconds'])) {
            $ms = (int) $data['milliseconds'];
            $this->sec = intdiv($ms, 1000);
            $this->usec = ($ms % 1000) * 1000;
        }
    }

    public function __toString()
    {
        return (string) $this->toUTCDateTime();
    }
}
