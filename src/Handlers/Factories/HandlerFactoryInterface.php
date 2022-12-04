<?php

namespace Simple\Logger\Handlers\Factories;

use Simple\Logger\Handlers\HandlerInterface; 

interface HandlerFactoryInterface
{
    /**
     * @param string $filename
     * 
     * @return HandlerInterface
     */
    public static function create(string $filename): HandlerInterface;
}