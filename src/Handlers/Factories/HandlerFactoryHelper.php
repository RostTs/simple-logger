<?php 

namespace Simple\Logger\Handlers\Factories;

class HandlerFactoryHelper
{
    /**
     * @param string $handlerType
     * 
     * @return HandlerFactoryInterface
     */
    public static function getHandlerFactory(string $handlerType): HandlerFactoryInterface {
            return $handlerType::getInstance();
    }
}