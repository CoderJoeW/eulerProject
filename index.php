<?php

require_once('vendor/autoload.php');

use eulerproject\Euler;

$euler = new Euler();

$multiples = $euler->getMultiplesOfNumbersBelowMax([3, 5], 1000);

$sum = $euler->getSumOfArray($multiples);

print($sum);