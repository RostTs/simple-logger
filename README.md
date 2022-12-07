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

use DevCoder\DotEnv;

require_once 'vendor/autoload.php';

$absolutePathToEnvFile = DIR . '/.env';

(new DotEnv($absolutePathToEnvFile))->load();

$filename = dirname(FILE) . DIRECTORY_SEPARATOR . 'var' .
            DIRECTORY_SEPARATOR . 'log' . DIRECTORY_SEPARATOR . 'test.log';

$handler = Handlers\Factories\HandlerFactoryHelper::getHandlerFactory(getenv('FILE_HANDLER_FACTORY'))::create();
$handler->settings($filename);

$logger = \Simple\Logger\Logger\Logger::getInstance();
$logger->settings($handler);
$logger->log(\Psr\Log\LogLevel::EMERGENCY, 'test');
```
