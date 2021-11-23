# php-log

A simple PHP utility to help with logging debug output.

## Install

Install package with composer

```
composer require http-tom/php-log
```

## How to use

```php
require_once 'vendor/autoload.php';
use HttpTom\Log\Log as Log;

$log = new Log();
```

Add a log entry

```php
$log->add('var to log');
```

Dump contents of log

```php
$log->dump();
```

