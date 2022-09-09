<?php

namespace App\Logger;

use DateTime;

class Logger implements LoggerInterface {
    public function __construct(private string $path) {
        if (!file_exists($this->path)) {
            file_put_contents($this->path,'Start of logging: ');
        }
    }
    public function log($data) : void {
        $content = print_r($data,1);
        $time = (new DateTime())->format('H:i:s');
        $log = "[{$time}]\t{$content}\n";
        file_put_contents($this->path,$log, FILE_APPEND);
    }

}