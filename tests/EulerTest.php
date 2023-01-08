<?php

namespace eulerproject\Tests;

use eulerproject\Euler;

use PHPUnit\Framework\TestCase;

class EulerTest extends TestCase{

    private $euler;

    public function setUp(): void{
        $this->euler = new Euler();
    }

    public function multiplesDataProvider(): array{
        return [
            [[2], 10, [2, 4, 6, 8]],
            [[3], 10, [3, 6, 9]],
            [[5], 10, [5]],
            [[3, 5], 10, [3, 5, 6, 9]],
            [[3, 5], 100, [3,6,9,12,18,21,24,27,33,36,39,42,48,51,54,57,63,66,69,72,78,81,84,87,93,96,99,5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90,95]],
            [[3, 3, 5], 10, [3, 5, 6, 9]]
        ];
    }

    /**
     * @covers getMultiplesOfNumbersBelowY
     * @dataProvider multiplesDataProvider
     */
    public function testGetMultiplesOfNumbersBelowMax($numbers, $max, $expected): void{
        $this->assertEqualsCanonicalizing($expected, $this->euler->getMultiplesOfNumbersBelowMax($numbers, $max));
    }

    public function getSumOfArrayDataProvider(): array{
        return [
            [[2, 4, 6, 8], 20],
            [[92222, 6462, 45345], 144029],
            [[3, 5, 6, 9], 23]
        ];
    }

    /**
     * @covers getSumOfArray
     * @dataProvider getSumOfArrayDataProvider
     */
    public function testGetSumOfArray($arr, $expected): void{
        $this->assertEquals($expected, $this->euler->getSumOfArray($arr));
    }
}