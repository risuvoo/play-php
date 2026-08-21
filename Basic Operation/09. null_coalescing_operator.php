<?php


$text2 = "moin";

$text3 = "maria";
//ternery operator 

$name = isset($text3) ? $text3 : $text2;

// null closing operator
//support in PHP 7
//better from ternery operator

$name = $text3 ?? $text2;
echo $name; 