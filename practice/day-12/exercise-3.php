<?php

$age = 16;

try{
    if($age < 18){
        throw new Exception("Something went wrong");
    }
}catch(Exception $e){
    echo $e->getMessage();
}