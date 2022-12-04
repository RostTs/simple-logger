<?php

namespace Simple\Logger\Logger;

use Psr\Log\AbstractLogger;
use Simple\Logger\Handlers\HandlerInterface;
use Simple\Logger\Singleton\Singleton;

class Logger extends AbstractLogger{

    use Singleton;

    public function __construct(private HandlerInterface $handler)
    {}

    /**
     * {@inheritDoc}
     */
    public function log(mixed $level, string|\Stringable $message, array $context = []): void
    {
        $this->handler->handle([
            strtoupper($level) => $this->interpolate((string)$message, $context),
        ]);
    }

    /**
     * @param string $message
     * @param array $context
     * 
     * @return string
     */
    private function interpolate(string $message, array $context = []): string
    {
        // build a replacement array with braces around the context keys
        $replace = array();
        foreach ($context as $key => $val) {
            // check that the value can be cast to string
            if (!is_array($val) && (!is_object($val) || method_exists($val, '__toString'))) {
                $replace['{' . $key . '}'] = $val;
            }
        }
    
        // interpolate replacement values into the message and return
        return strtr($message, $replace);
    }
}