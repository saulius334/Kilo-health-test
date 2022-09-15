<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Model\Offer;

class GetIDTest extends TestCase {

    public function test_that_gets_id() : void {

        $data = new Offer();

        $data->load(["offerId" => 123]);
        $expected = 123;
 
        $this->assertEquals($expected, $data->getOfferId());
    }
}