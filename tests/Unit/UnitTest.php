<?php

namespace Tests\Unit;

use App\Interfaces\OfferCollectionInterface;
use App\Model\Offer;
use App\Model\OfferCollection;
use App\Services\DataFilter;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase {

    public function test_that_gets_id() : void {

        $data = new Offer();

        $data->load(["offerId" => 123]);
        $expected = 123;
 
        $this->assertEquals($expected, $data->getOfferId());
    }
    public function test_that_get_price() : void {

        $data = new Offer();

        $data->load(["price" => 390.4]);
        $expected = 390.4;

        $this->assertEquals($expected, $data->getPrice());
    }
    public function test_that_DataFilter_works() : void {
        $Offer = new OfferCollectionInterface();
        $data = new DataFilter($Offer);

        $data->filterByPrice(5, 100);
        $

        
    }
}