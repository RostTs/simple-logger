<?php

namespace Simple\Logger\Handlers;

interface HandlerInterface
{

    /**
     * @param string $filename
     */
    public function settings(string $filename): void;

    /**
     * @param string $logName
     * @param string $message
     */
    public function write(string $logName, string $message): void;

    /**
     * @param string $logName
     * @param string $message
     * 
     * @return string
     */
    public function modifyMessage(string $logName, string $message): string;
}