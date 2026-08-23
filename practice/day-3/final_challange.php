<?php

$age = 25;
$hasNid = true;
$isActive = true;

if($age <18){
    echo "You are underage";
}elseif($age>=18){
    if($hasNid!==true){
        echo "NID is required";
    }else{
        if($isActive !== true){
            echo "Account is inactive";
        }else{
            echo "You can apply";
        }
    }
}
