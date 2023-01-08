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

    /**
     * @covers getMultiplesOfNumbersBelowY
     */
    public function testSolvesProblem1(): void{
        $answer = $this->euler->getMultiplesOfNumbersBelowMax([3, 5], 1000);

        $this->assertEquals(233168, $this->euler->getSumOfArray($answer));
    }

    public function getPrimeFactorsDataProvider(): array{
        return [
            [12, [2, 2, 3]],
            [36, [2, 2, 3, 3]],
            [126, [2, 3, 3, 7]],
            [460, [2, 2, 5, 23]],
            [2354, [2, 11, 107]]
        ];
    }

    /**
     * @covers getPrimeFactors
     * @dataProvider getPrimeFactorsDataProvider
     */
    public function testGetPrimeFactors($number, $expected): void{
        $this->assertEqualsCanonicalizing($expected, $this->euler->getPrimeFactors($number));
    }

    public function getLeastCommonMultipleDataProvider(): array{
        return [
            [[10, 35], 70],
            [[40, 82], 1640],
            [[100, 1000], 1000],
            [[40, 36, 126], 2520]
        ];
    }

    /**
     * @covers getLeastCommonMultiple
     * @dataProvider getLeastCommonMultipleDataProvider
     */
    public function testGetLeastCommonMultiple($numbers, $expected): void{
        $this->assertEquals($expected, $this->euler->getLeastCommonMultiple($numbers));
    }

    /**
     * @covers dropDuplicates
     */
    public function testDropDuplicates(){
        $this->assertEquals([1, 2, 3], $this->euler->dropDuplicates([1, 1, 2, 2, 3, 3]));
    }
}