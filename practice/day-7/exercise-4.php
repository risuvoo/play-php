<?php

$a = 10; 
$b = 80;
$c = 25;

function findMax(int $a, int $b, int $c){
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

$result = findMax($a, $b, $c);
echo $result;