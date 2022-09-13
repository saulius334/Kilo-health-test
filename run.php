<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controllers\CLIController;
use App\Logger\Logger;

$logDir = __DIR__ . '/' . 'Log';
$logFileName = date('Y-m-d') . '.txt';

$logger = new Logger($logDir . '/' . $logFileName);
$info = new Logger($logDir . '/' . $logFileName);


$cli = new CLIController($logger);
$result = $cli->run($argv);
printf('Result is %d' . PHP_EOL, $result);