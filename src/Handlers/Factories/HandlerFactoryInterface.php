<?php

namespace Simple\Logger\Handlers\Factories;

use Simple\Logger\Handlers\HandlerInterface; 

interface HandlerFactoryInterface
{
    /**
     * @return HandlerInterface
     */
    public static function create(): HandlerInterface;

    /**
     * @return object
     */
    public static function getInstance(): object;
}