<?php

$numbers = [10, 15, 20, 25, 30, 35, 40];

$evenCount = 0;
$oddCount = 0;
$sum = 0;

foreach($numbers as $number){
   if($number % 2 === 0){
    $evenCount++;
   }else{
    $oddCount++;
   }

   $sum = $sum + $number;
}

echo "Even Count: ".$evenCount."\n";
echo "Odd Count: ".$oddCount."\n";
echo "Total Sum: ".$sum."\n";