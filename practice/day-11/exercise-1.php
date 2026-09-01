<?php

session_start();

$_SESSION['user'] = [
    "name" => "Suvo",
    "age" => 28,
    "profession" => "Software Engineer",
    "country" => "Bangladesh"
];

foreach($_SESSION['user'] as $key => $value){
    echo ucwords($key).": $value \n";
}