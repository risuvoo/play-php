<?php

$numbers = [10, 20, 30, 40, 50];

function calculateSum($numbers){
    $total = 0;
    foreach($numbers as $number){
        $total += $number;
    }
    return $total;
}

$result = calculateSum($numbers);

echo $result;