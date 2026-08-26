<?php

$number = "10"; // 10, 15, 27, 40

function checkEvenOdd(int $number){
    if($number%2 === 0){
        echo $number." -> "."Even \n";
    }else{
        echo $number." -> "."Odd \n";
    }
}

checkEvenOdd($number);