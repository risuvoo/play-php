<?php

$age = 25;

if($age <= 12){
    echo "Child";
}elseif($age <=17 && $age >=13){
    echo "Teenager";
}elseif($age <=59 && $age >=18){
    echo "Adult";
}elseif($age >= 60){
    echo "Senior";
}else{
    echo "Not match with these category (Child, Teenager, Adult, Senior)";
}