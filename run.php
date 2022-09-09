<?php

spl_autoload_extensions('.php');
spl_autoload_register();

use App\Logger\Logger;

$logDir = __DIR__ . '/' . 'Log';
$logFileName = date('Y-m-d') . '.txt';

$logger = new Logger($logDir . '/' . $logFileName);
// echo $logDir . '/' . $logFileName;
$info = new Logger($logDir . '/' . $logFileName);
$info->log("nice");