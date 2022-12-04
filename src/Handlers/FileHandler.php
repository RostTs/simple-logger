<?php

namespace Simple\Logger\Handlers;

class FileHandler implements HandlerInterface
{

    public function __construct(private string $filename)
    {
        $file = dirname($filename);
        // Creating directory for logs
        if (!file_exists($file)) {
            mkdir($file, 0777, true);
        }
    }

    
    /**
     * @param array $logs
     */
    public function handle(array $logs): void {
        // Modifying log before logging
        foreach ($logs as $logName => $logMsg) {
            $log = date("Y:m:d") . ' - ' . $logName . ': ' . $logMsg;
            file_put_contents($this->filename, $log. PHP_EOL, FILE_APPEND);
        }
    }
}