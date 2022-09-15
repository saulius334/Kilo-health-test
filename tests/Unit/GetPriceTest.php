<?php

namespace Tests\Unit;

use App\Model\Offer;
use PHPUnit\Framework\TestCase;

class GetPriceTest extends TestCase {

    public function test_that_get_price() : void {

        $data = new Offer();

        $data->load(["price" => 390.4]);
        $expected = 390.4;

        $this->assertEquals($expected, $data->getPrice());
    }
}