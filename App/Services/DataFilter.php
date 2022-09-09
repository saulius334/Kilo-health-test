<?php

namespace App\Services;

use App\Interfaces\OfferCollectionInterface;
use Iterator;

class DataFilter {

    private Iterator $iterator;

    public function __construct(OfferCollectionInterface $dataCollection) {
        $this->iterator = $dataCollection->getIterator();
    }

    public function filterByPrice($price_from, $price_to) : array {
        $price = [];
        foreach ($this->iterator as $value) {
            $priceTag = $value->getPrice();
            if ($priceTag >= $price_from && $priceTag <= $price_to) {
                $price[] = $value;
            }
        }
        return $price;
    }
    public function filterByVendorId(int $id) : array {
        $answer = [];
        foreach ($this->iterator as $value) {
            if ($id == $value->getVendorId()) {
                $answer[] = $value;
            }
        }
        return $answer;
    }
}
