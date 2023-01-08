<?php

namespace eulerproject;

class Euler{

    public function getMultiplesOfNumbersBelowMax(array $numbers, int $max): array{
        $factors = [];

        foreach($numbers as $number){
            for($i = 1; $i < $max; $i++){
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

    public function getSumOfArray(array $arr): int{
        return array_sum($arr);
    }
}