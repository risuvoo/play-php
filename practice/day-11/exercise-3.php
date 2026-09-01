<?php

session_start();

$_SESSION['user'] = [
    "name" => "Suvo",
    "email" => "suvo@gmail.com"
];

// session_unset();
// session_destroy();

if(isset($_SESSION['user'])){
    echo "Welcome Suvo";
}else{
    echo "Please login first";
}