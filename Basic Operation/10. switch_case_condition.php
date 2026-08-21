<?php

$n = 12;
$r = $n % 2; // remender  jake nia amra kaj korbo



// switch er khetre protiti condition cheak kore ai jonno (break) use korte hoe
switch($r){
    case 0:
    echo "{$n} is even number\n";
    break;
    default:
    echo "{$n} is odd number\n";
}
echo "\n";
// multiple switch case
$result = 4.50 ;

switch ($result){
    
    case 2:
    echo "his grade is D+";
    break;
    
    case 3:
    case 3.50:
    echo "his grade is C+";
    break;
    
    case 4:
    case 4.50:
    echo "his grade is B+";
    break;
    
    case 5:
    echo "his grade is A+";
    break;
    
    default:
    echo "His is loser";

}

