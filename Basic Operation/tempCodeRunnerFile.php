<?php
$number=6;
$factorial = 1; 
    for ($i = 1; $i <= $number; $i++){ 
      $factorial = $factorial * $i;
    } 
printf("Factorial number is %d = %d",$number,$factorial);