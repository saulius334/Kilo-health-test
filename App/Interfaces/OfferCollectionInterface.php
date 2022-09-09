<?php
// Interface for The Collection class that contains Offers
namespace App\Interfaces;

use Iterator;
use App\Interfaces\OfferInterface;

interface OfferCollectionInterface {
    public function get(int $index): OfferInterface;
    public function getIterator(): Iterator;

    }