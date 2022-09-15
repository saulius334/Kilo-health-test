<?php

namespace Tests\Unit;

use App\Logger\Logger;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertIsArray;
use function PHPUnit\Framework\assertIsString;

class LoggerLogFileTest extends TestCase {

    public function test_that_logger_log_file() : void {
        unlink(__DIR__ . '/../testLogs/' . date('Y-m') . 'loggerLogTest.txt');
        $logger = new Logger(__DIR__ . '/../testLogs/' . date('Y-m') . 'loggerLogTest.txt');

        $logger->log(' Hello World ');

        $data = file_get_contents(__DIR__ . '/../testLogs/' . date('Y-m') . 'loggerLogTest.txt');


        assertIsString($data);

        $data = explode(' ', $data);
        assertEquals($data[4], "Hello");
        assertEquals($data[5], "World");
    }
}