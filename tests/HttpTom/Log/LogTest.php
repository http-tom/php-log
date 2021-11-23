<?php

declare(strict_types=1);

require dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use HttpTom\Log\Log as Log;


final class LogTest extends TestCase {

    public function testLog()
    {
        $log = new Log();
        $log->add('testing');
        $this->$this->assertIsString($log->dump());
    }
}
