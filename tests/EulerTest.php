<?php

namespace eulerproject\Tests;

use eulerproject\Euler;

use PHPUnit\Framework\TestCase;

class EulerTest extends TestCase{

    public function multiplesDataProvider(){
        return [
            [[2], 10, [2, 4, 6, 8]],
            [[3], 10, [3, 6, 9]],
            [[5], 10, [5]],
            [[3, 5], 10, [3, 5, 6, 9]],
            [[3, 5], 100, []]
        ];
    }

    /**
     * @covers getMultiplesOfXBelowY
     * @dataProvider multiplesDataProvider
     */
    public function testGetMultiplesOfXBelowMax($x, $max, $expected){
        $euler = new Euler();

        $this->assertEqualsCanonicalizing($expected, $euler->getMultiplesOfXBelowMax($x, $max));
    }
}