<?php


function sum(int ...$number):int{
    $result=0;
    for($i=0;$i<count($number);$i++){
        $result=$result + $number[$i];
    }
    return $result;
}
echo sum(1,2,3,4,100);