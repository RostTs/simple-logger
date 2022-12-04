<?php

namespace Simple\Logger\Singleton;

trait Singleton
{
    private static $instances = [];

    // TODO: make it array of dependencies
    /**
     * @param object|null $dependency
     * 
     * @return object
     */
    public static function getInstance(?object $dependency = null): object
    {
        $subclass = static::class;
       
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static($dependency);
        }
        return self::$instances[$subclass];
    }
}