<?php

namespace App\Logger;

use DateTime;

class Logger implements LoggerInterface {
    public function __construct(private $path) {
        if (!file_exists(dirname($this->path))) {
            file_put_contents(dirname($this->path),"");
        }
    }
    public function log($data) : void {
        $content = print_r($data,1);
        $time = (new DateTime())->format('Y-m-d H:i:s');
        $log = "[{$time}]\t{$content}\n";
        file_put_contents($this->path,$log, FILE_APPEND);
    }

}