<?php

namespace Simple\Logger\Singleton;

class Singleton
{
    private static $instances = [];

    /**
     * @return object
     */
    public static function getInstance(): object
    {
        $subclass = static::class;
       
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }
        return self::$instances[$subclass];
    }
}