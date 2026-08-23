<?php

$a = 20;
$b = 10;

function calculation(int $a, int $b, string $calcType){

    if($calcType === 'addition'){
        return $a + $b;
    }else if($calcType === 'subtraction'){
        return $a - $b;
    }else if($calcType === 'multiplication'){
        return $a * $b;
    }else if($calcType === 'division'){
        return $a / $b;
    }else{
        return "Type Not found or Something is Wrong";
    }

}

$addition = calculation($a, $b, 'addition');
$subtraction = calculation($a, $b, 'subtraction');
$multiplication = calculation($a, $b, 'multiplication');
$division = calculation($a, $b, 'division');

echo $addition;
echo $subtraction;
echo $multiplication;
echo $division;