<?php

echo "Hello world";

// variable
$name = "rahim"; //string
$age = 28; //int
$price = 99.05; //float
$isActive = true; //boolean
$items = [1,2,3]; //array
$user = null; //null

// string concatenate
$name = "Karim";
echo "Hello " . $name;

// type declaration
function add(int $a, int $b):int{
    return $a+$b;
}

