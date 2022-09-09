<?php

namespace App\Logger;

interface LoggerInterface
{
    function log(mixed $data): void;
}