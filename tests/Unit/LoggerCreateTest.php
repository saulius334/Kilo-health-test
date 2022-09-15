<?php

namespace Tests\Unit;

use App\Logger\Logger;
use PHPUnit\Framework\TestCase;

class LoggerCreateTest extends TestCase {

    public function test_that_logger_creates_file() : void {
        unlink(__DIR__ . '/../testLogs/' . date('Y-m') . 'loggerCreateTest.txt');

        $logger = new Logger(__DIR__ . '/../testLogs/' . date('Y-m') . 'loggerCreateTest.txt');
        
        $this->assertFileExists(__DIR__ . '/../testLogs/' . date('Y-m') . 'loggerCreateTest.txt');
        
    }
}
