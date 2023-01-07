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
            }
        }

        return array_unique($multiples);
    }

    public function getSumOfArray(array $arr): int{
        return array_sum($arr);
    }

}