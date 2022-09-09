<?php

namespace App\Logger;

use DateTime;

class Logger implements LoggerInterface {
    public function __construct(private $path) {
        if (!file_exists($this->path)) {
            echo $this->path;
            file_put_contents($this->path,json_encode(''));
        }
    }


}