<?php 
 
 $n = 10;
/*  if (12 === $n){
     echo "twelve";
 }elseif( 10 === $n){
     echo "ten";
 }else{
     echo "no match";
 }

echo "\n"; */
 
//replace in ternary operator
 
$m = (12==$n) ? "twelve" : ((10==$n) ? "ten" : "no match");

echo $m;

echo "\n";

$b = 12===$n ? "twelve" : "no match";
echo $b;
echo "\n";

//odd and even number use ternary operator

$oddEven= $n % 2 === 0 ? "even" : "odd";
echo $oddEven; 