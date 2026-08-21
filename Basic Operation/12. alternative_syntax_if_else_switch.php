<?php 


$n = 12;
//example for if else
if ($n % 2==0):
    echo "this is even number";
    echo "\n";
elseif( $n  < 0):
    echo "this is negative number";
    echo "\n";
else:
    echo "this is odd number";
endif;
echo "\n";

// example for switch case


switch($n%2 === 0 ):
    
    case  true : //0 dile je problem ta hoe oita data type er jonno hote pare
    echo "{$n} is even number\n";
    break;

    default:
    echo "{$n} is odd number\n";
endswitch;
