<?php
session_start();

$lastLogin = isset($_COOKIE["last_visit"]) ? $_COOKIE["last_visit"] : "";

if(isset($_SESSION['user'])){
    echo "========================";
    echo "<br/>";
    echo "WELCOME TO DASHBOARD";
     echo "<br/>";
    echo "========================";
     echo "<br/>";
    echo "Name: {$_SESSION['user']['name']}";
     echo "<br/>";
    echo "Email: {$_SESSION['user']['email']}";
     echo "<br/>";
    echo "[Logout]";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    echo "Last Login: {$lastLogin}";
}else{
    echo "Please login first";
}