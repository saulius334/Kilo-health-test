<?php

namespace App\Model;

use App\Interfaces\OfferInterface;

class Offer implements OfferInterface {
    private int $offerId;
    private string $productTitle;
    private int $vendorId;
    private float|int $price;

    public function load(array $data) {
        foreach ($data as $index => $value) {
            if (property_exists($this, $index)) {
                $this->$index = $value;
            }
        }
        return $this;
    }
    public function getOfferId() : int {
        return $this->offerId;
    }
    public function getProductTitle() : string {
        return $this->productTitle;
    }
    public function getVendorId() : int {
        return $this->vendorId;
    }
    public function getPrice() : float|int {
        return $this->price;
    }


}