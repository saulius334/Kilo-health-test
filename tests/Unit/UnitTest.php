<?php

namespace Tests\Unit;

use App\Model\Offer;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase {

    public function test_that_gets_id() : void {

        $data = new Offer();

        $data->load(["offerId" => 123,]);
        $expected = 123;
 
        $this->assertEquals($expected, $data->getOfferId());
    }
}