<?php

namespace App\Controllers;

use App\Logger\LoggerInterface;
use App\Services\DataFilter;
use Exception;

class CLIController {
    const COUNT_BY_PRICE = 'count_by_price_range';
    const COUNT_BY_VENDOR = 'count_by_vendor_id';
    private LoggerInterface $logger;
    private string $command;
    private array $options;
    
    public function __construct() {
        
    }
    public function run(array $argv) : mixed {
        // $this->resolve($argv);
        $this->validate();
        $this->logger->log(['Command: ' => $this->command, 'Arguments: ' => $this->options]);
        $data = [];
        $this->logger->log(['data' => ['total' => count($data)]]);

        $filterer = new DataFilter($data);
        if ($this->command === self::COUNT_BY_PRICE) {
            $filteredData = $filterer->filterByPrice(...$this->options);
        } else if ($this->command === self::COUNT_BY_VENDOR) {
            $filteredData = $filterer->filterByVendorId(...$this->options);
        } else {
            throw new Exception("Wrong command");
        }
        $this->logger->log(['data' => ['result' => $filteredData]]);
        return count($filteredData);
    }
    private function api() : array {
        return $this->data;
    }
    // private function resolve(array $argv) : void {

    // }
    private function validate() : void {
        $api = $this->api();
        if (!isset($api[$this->command])) {
            throw new Exception("Unknown command: `{$this->command}`");
        }
        $argCount = count($api[$this->command]);
        if ($argCount > count($this->options)) {
            throw new Exception("`{$this->command}` command takes exactly {$argCount} arguments");
        }
    }
}