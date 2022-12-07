# simple-logger
Simple psr-3 logger with Factory and Singleton patterns implementation

# Installation

```bash
composer require rost/logger
```

# Requirements
 - PHP 8.1
 - psr/log 3.0

# How to use ?

```php

namespace Simple\Logger;

require_once 'vendor/autoload.php';

$filename = dirname(FILE) . DIRECTORY_SEPARATOR . 'var' .
            DIRECTORY_SEPARATOR . 'log' . DIRECTORY_SEPARATOR . 'test.log';

$handler = Handlers\Factories\HandlerFactoryHelper::getHandlerFactory(Enums\Handler::FILE)::create($filename);

$logger = \Simple\Logger\Logger\Logger::getInstance($handler);

$logger->log(\Psr\Log\LogLevel::EMERGENCY, 'test');
```
