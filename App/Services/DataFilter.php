<?php

namespace App\Services;

class DataFilter {
    public function __construct(private array $data = []) {
        
    }

    public function filterByPrice($price_from, $price_to) : array {
        return $this->data;
    }
    public function filterByVendorId(int $id) : array {
        return $this->data;
    }
}
