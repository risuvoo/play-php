<?php

//var_dump() -> showing value + type

$name = "Suvo";

var_dump($name);


// Common casting -> if your value get from other place with wrong type then you can change the type
$number = (int) "100";
$price = (float) "99.50";
$name = (string) 100;
$status = (bool) 1;