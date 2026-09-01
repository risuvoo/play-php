<?php

$name = 'Suvo';
$email = "suvo@gmail.com";
$password= 123456;

session_start();

$_SESSION['user'] = [
    'name' => 'Suvo',
    'email' => $email
];

$currentTime = date('Y-m-d H:i:s');
setcookie("last_visit", $currentTime, time() + 3600, "/");

echo "Login";