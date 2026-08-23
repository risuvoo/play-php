<?php

$email =  "admin@gmail.com";
$password = "123456";
$isActive = true;

if($email && $password){
    if($isActive === true){
        echo "Login successful";
    }else{
        echo "Account is inactive";
    }
}else{
    echo "Invalid credentials";
}