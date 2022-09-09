<?php

namespace App\Controllers;

use App\Interfaces\ReaderInterface;
use App\Logger\LoggerInterface;
use App\Services\DataFilter;
use Exception;

class CLIController {
    const COUNT_BY_PRICE = 'count_by_price_range';
    const COUNT_BY_VENDOR = 'count_by_vendor_id';
    private LoggerInterface $logger;
    private ReaderInterface $reader;
    private string $command;
    private array $options;
    
    public function __construct() {
        
    }
    public function run(array $argv) : mixed {
        // $this->resolve($argv);
        // $this->validate();
        $this->logger->log(['Command: ' => $this->command, 'Arguments: ' => $this->options]);

        $dataCollection = $this->reader->read(implode('/', [__DIR__, '..', '..', 'data', 'offers.json']));





        $filterer = new DataFilter($dataCollection);
        if ($this->command === self::COUNT_BY_PRICE) {
            $filteredData = $filterer->filterByPrice(...$this->options);
        } else if ($this->command === self::COUNT_BY_VENDOR) {
            $filteredData = $filterer->filterByVendorId(...$this->options);
        } else {
            throw new Exception("Bad command");
        }
        $this->logger->log(['data' => ['result' => $filteredData]]);
        return count($filteredData);
    }
    private function api() : array {
        return [
            self::COUNT_BY_PRICE => ['from', 'to'],
            self::COUNT_BY_VENDOR => ['id'],
        ];
    }
    // private function resolve(array $argv) : void {

    // }
    // private function validate() : void {
    //     $api = $this->api();
    //     if (!isset($api[$this->command])) {
    //         throw new Exception("Unknown command: {$this->command}");
    //     }
    // }
}