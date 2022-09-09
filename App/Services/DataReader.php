<?php

namespace App\Services;

use App\Interfaces\OfferCollectionInterface;
use App\Interfaces\ReaderInterface;
use App\Model\OfferCollection;
use Exception;

class DataReader implements ReaderInterface {
    public function read(string $input) : OfferCollectionInterface {
        $raw = file_get_contents($input);
        $data = json_decode($raw,true);
        if (!file_exists($input)) {
            throw new Exception("Failed to read '{$input}'");
        }
        return new OfferCollection($data);
    }
}