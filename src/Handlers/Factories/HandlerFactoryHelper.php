<?php 

namespace Simple\Logger\Handlers\Factories;

use Simple\Logger\Enums\Handler;

class HandlerFactoryHelper
{
    /**
     * @param Handler $handlerType
     * 
     * @return HandlerInterface
     */
    public static function getHandlerFactory(Handler $handlerType): HandlerFactoryInterface {
        if ($handlerType === Handler::FILE) {
            return new FileHandlerFactory();
        }
    }
}