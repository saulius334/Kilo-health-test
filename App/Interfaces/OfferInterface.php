<?php
// Interface for The Collection class that contains Offers
namespace App\Interfaces;

interface OfferInterface {
        function getPrice(): float;
        function getVendorId(): string|int;
}