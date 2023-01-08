<?php

namespace eulerproject;

class Euler{

    public function getMultiplesOfNumbersBelowMax(array $numbers, int $max): array{
        $factors = [];

        foreach($numbers as $number){
            for($i = $number; $i < $max; $i++){
                if($i % $number === 0){
                    array_push($factors, $i);

                    if($i % 50000 === 0){
                        $factors = array_unique($factors);
                    }
                }
            }
        }

        return array_unique($factors);
    }

    public function getPrimeFactors($number): array{
        $primeNumbers = [];

        $current = $number;

        $i = 2;
        while ($current !== 1){
            if($current % $i === 0){
                array_push($primeNumbers, $i);

                $current = $current / $i;
            }else{
                $i++;
            }
        }

        return $primeNumbers;
    }

    public function getSumOfArray(array $arr): int{
        return array_sum($arr);
    }
}