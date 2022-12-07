<?php

namespace Simple\Logger\Handlers;

use Simple\Logger\Singleton\Singleton;

class FileHandler extends Singleton implements HandlerInterface
{
    private $file;

    /**
     * @param string $filename
     */
    public function settings(string $filename): void
    {
        $file = dirname($filename);
        // Creating directory for logs
        if (!file_exists($file)) {
            mkdir($file, 0777, true);
        }
        $this->file = fopen($filename, 'a'); 
    }

    /**
     * @param string $logName
     * @param string $message
     */
    public function write(string $logName, string $message): void {
        // Modifying log before logging
        fwrite($this->file, $this->modifyMessage($logName, $message));
    }

    /**
     * @param string $logName
     * @param string $message
     * 
     * @return string
     */
    public function modifyMessage(string $logName, string $message): string {
        // Modifying log before logging
        return date("Y:m:d") . ' - ' . $logName . ': ' . $message . PHP_EOL;
    }
}