<?php

namespace eulerproject;

class Euler{

    public function getMultiplesOfNumbersBelowMax(array $findMultiples, int $max): array{
        $multiples = [];

        foreach($findMultiples as $m){
            for ($i = 1; $i < $max; $i++){
                $multiple = $i * $m;
    
                if($multiple < $max){
                    array_push($multiples, $i * $m);
                }

                if($i % 50000 === 0){
                    $multiples = array_unique($multiples);
                }
            }

            $multiples = array_unique($multiples);
        }

        return $multiples;
    }

    public function getSumOfArray(array $arr): int{
        return array_sum($arr);
    }

}