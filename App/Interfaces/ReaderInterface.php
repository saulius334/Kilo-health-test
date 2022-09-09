<?php

// The interface provides the contract for different readers * E.g. it can be XML/JSON Remote Endpoint, or CSV/JSON/XML local files

namespace App\Interfaces;

use App\Interfaces\OfferCollectionInterface;

interface ReaderInterface {

// Read in incoming data and parse to objects
public function read(string $input): OfferCollectionInterface; 

}