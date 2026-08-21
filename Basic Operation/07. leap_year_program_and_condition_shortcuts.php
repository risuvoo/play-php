<?php
//Leap year  
//if 4 dia division hoe
//tahole amra 100 dia vag korar chesta korbo
//abar 400 dia vag korar chesta korbo
//ai 3 ta condition sotto hole ee year ta leap year  


/* $year = 2018;
if ($year %4 ===0 &&$year %100 ===0 && $year %400 ===0){
    echo "{$year} is leap year";
}elseif($year %4 ===0 && $year %100 ===0){
    echo "{$year} is not leap year";
}else if($year %4 ===0){
    echo "{$year} is leap year";
}else{
    echo "{$year} is not leap year";
}
 */

 //login implement for leap year


 /* if (true && true){
     echo "wow\n";
 }
 if (true && false){
    echo "wow\n";
}
if (true || false){
    echo "wow\n";
}
if (false || false){
    echo "wow\n";
} */


//shortcut leap year

$year =1900;
if($year % 4===0 && ($year %100 != 0 || $year %400 ===0 )){ // true && (false||false) 
    echo "{$year} is leap year"; 
}else{
    echo "{$year} is not leap year";
}

if (true && false){
    echo "wow\n";
}
/* if (true && false){
    echo "wow\n";
} */