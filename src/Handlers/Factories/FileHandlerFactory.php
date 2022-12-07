<?php 

namespace Simple\Logger\Handlers\Factories;

use Simple\Logger\Handlers\FileHandler;
use Simple\Logger\Handlers\HandlerInterface;
use Simple\Logger\Singleton\Singleton;

class FileHandlerFactory extends Singleton implements HandlerFactoryInterface
{
    /**
     * @return HandlerInterface
     */
    public static function create(): HandlerInterface {
        return FileHandler::getInstance();
    }
}