<?php 

session_start();

$_SESSION['user'] = [
    "name" => "Suvo",
    "age" => 28
];

$_SESSION['user']['age'] = 30;

foreach($_SESSION['user'] as $key => $value){
    echo ucwords($key).": $value \n";
}