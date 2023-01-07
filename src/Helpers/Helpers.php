<?php

namespace eulerproject\Helpers;

use Ubench;

class Helpers{

    public static function printBenchmarkInfo(UBench &$benchmark){
        $data = [
            'ElapsedTime' => $benchmark->getTime(),
            'PeakMemoryUsage' => $benchmark->getMemoryPeak(),
            'MemoryUsage' => $benchmark->getMemoryUsage()
        ];

        self::prettyPrintArray($data);
    }

    public static function prettyPrintArray(array $data){
        print('<pre>');
        print_r($data);
        print('</pre>');
    }

}