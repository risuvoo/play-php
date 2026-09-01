<?php

session_start();

$_SESSION['user'] = [
    "name" => "Suvo",
    "email" => "suvo@gmail.com"
];
echo "===========Login User=================\n";
echo "Welcome ".$_SESSION['user']['name']."\n";

echo "===========Logout User=================\n";

session_unset();
session_destroy();

echo "Logout successful";