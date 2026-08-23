<?php

$marks  = 75;

if($marks >= 80){
    echo "Grade: A+";
}elseif($marks >= 70 && $marks <=79){
    echo "Grade: A";
}elseif($marks >= 60 && $marks <= 69 ){
    echo "Grade: B";
}elseif($marks >= 50 && $marks <= 59 ){
    echo "Grade: C";
}elseif($marks >= 40 && $marks <= 49 ){
    echo "Grade: D";
}elseif($marks < 40){
    echo "Grade: F";
}else{
    echo "Someting Went Wrong";
}