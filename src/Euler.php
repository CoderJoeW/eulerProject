<?php

namespace eulerproject;

class Euler{

    public function getMultiplesOfNumbersBelowMax(array $numbers, int $max): array{
        $factors = [];

        foreach($numbers as $number){
            for($i = $number; $i < $max; $i++){
                if($this->isDivisible($i, $number)){
                    $factors[] = $i;
                }
            }
        }

        return $this->dropDuplicates($factors);
    }

    public function getLeastCommonMultiple($numbers): int{
        $factorCounts = [];

        foreach($numbers as $num){
            $factors = $this->getPrimeFactors($num);

            $fCount = array_count_values($factors);

            $factorCounts[] = $fCount;
        }

        $highestPowers = [];

        foreach($factorCounts as $fc){
            foreach($fc as $key => $value){
                if(array_key_exists($key, $highestPowers)){
                    if($highestPowers[$key] < $value){
                        $highestPowers[$key] = $value;
                    }
                }else{
                    $highestPowers[$key] = $value;
                }
            }
        }

        $lcm = 1;

        foreach($highestPowers as $key => $value){
            $lcm *= pow($key, $value);
        }

        return $lcm;
    }

    public function getPrimeFactors($number): array{
        $primeNumbers = [];

        $i = 2;
        while ($number !== 1){
            if($number % $i === 0){
                $primeNumbers[] = $i;

                $number = $number / $i;
            }else{
                $i++;
            }
        }

        return $primeNumbers;
    }

    public function getSumOfArray(array $arr): int{
        return array_sum($arr);
    }

    public function dropDuplicates($numbers): array{
        return array_values(array_flip(array_flip($numbers)));
    }

    public function isDivisible($x, $y): bool{
        return $x % $y === 0;
    }
}