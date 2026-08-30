<?php

function checkParamIsValidOrNot($a, $b):bool{
    return is_int($a) && is_int($b) && !($a === 0 && $b === 0);
}

function addition(int $a, int $b){
    if(checkParamIsValidOrNot($a, $b)){
        $result = $a + $b;
        return $result;
    }
    return "";
}

function subtraction(int $a, int $b){
     if(checkParamIsValidOrNot($a, $b)){
        $result = $a - $b;
        return $result;
    }
    return "";
}

function multiplication(int $a, int $b){
    if(checkParamIsValidOrNot($a, $b)){
        $result = $a * $b;
        return $result;
    }
    return "";
}

function division(int $a, int $b){
    if(checkParamIsValidOrNot($a, $b) && $b !== 0){
        $result = $a / $b;
        return $result;
    }
    return "";
}