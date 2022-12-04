<?php 

namespace Simple\Logger\Handlers\Factories;

use Simple\Logger\Handlers\FileHandler;
use Simple\Logger\Handlers\HandlerInterface;

class FileHandlerFactory implements HandlerFactoryInterface
{
    /**
     * @param string $filename
     * 
     * @return HandlerInterface
     */
    public static function create(string $filename): HandlerInterface {
        return new FileHandler($filename);
    }
}