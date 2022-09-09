<?php

namespace App\Controllers;

use App\Logger\LoggerInterface;



class CLIController {
    private LoggerInterface $logger;
    private string $command;
    private array $arguments;
    
    public function __construct() {
        
    }
    public function run(array $argv) : mixed {

        $this->logger->log(['Command: ' => $this->command, 'Arguments: ' => $this->arguments]);
    }
}