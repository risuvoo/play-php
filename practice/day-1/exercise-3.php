<?php

$a = 20;
$b = 10;

function calculation(int $a, int $b, string $calcType){

    if($calcType === 'addition'){
        echo ($a + $b) . "\n";
    }else if($calcType === 'subtraction'){
        echo ($a - $b) . "\n";
    }else if($calcType === 'multiplication'){
        echo ($a * $b) . "\n";
    }else if($calcType === 'division'){
        echo ($a / $b) . "\n";
    }else{
        echo "Type Not found or Something is Wrong";
    }

}

calculation($a, $b, 'addition');
calculation($a, $b, 'subtraction');
calculation($a, $b, 'multiplication');
calculation($a, $b, 'division');