<?php

namespace eulerproject;

class Euler{

    public function getMultiplesOfXBelowMax(array $x, $max): array{
        $multiples = [];

        foreach($x as $m){
            for ($i = 1; $i < $max; $i++){
                $multiple = $i * $m;
    
                if($multiple < $max){
                    array_push($multiples, $i * $m);
                }
            }
        }

        return $multiples;
    }

}