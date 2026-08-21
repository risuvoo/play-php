<?php

//result dhik asce but variable ta onno jekono type hole vule result asbe

/* function factorial($n){
    $result=1;
    for($i=$n;$i>1;$i--){
        $result = $result * $i;
    }
    return $result;
}

$x=0;
echo "{$x} is value". factorial($x); */


//type cheaking


function factorial(int $n){
    $result=1;
    for($i=$n;$i>1;$i--){
        $result = $result * $i; 
    }
    return $result;
}

$x=10;

echo "$x = ".factorial($x);


//if jodi valu sting hoe tahole convert kore nite hobe 

/* function factorial($n){
    $result=1;
    for($i=$n;$i>1;$i--){
        $result = $result * $i; 
    }
    return $result;
}

$x='a';
$b= (int)hexdec($x);
echo "$b = ".factorial($b); */







    

    






