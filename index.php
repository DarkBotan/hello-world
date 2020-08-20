<?php
    
    $seed = 1193;
    $lower = 10000;
    while ($lower % $seed != 0) {
        $lower++;
    }
    $higher = 99999999;
    while ($higher % $seed != 0) {
        $higher--;
    }
    $count = ($higher - $lower) / $seed;
    $minim = $lower / $seed;
    
    $rval = ((rand() % $count) + $minim) * $seed;
    echo "Random value is " . $rval;