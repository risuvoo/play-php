<?php

$fruits = ["Apple", "Mango", "Banana", "Orange"];

// apple,Banana print
echo $fruits[0];
echo $fruits[2];

// Orange replace with Grapes
$fruits[3] = "Grapes";

// add another item Pineapple
$fruits[] = "Pineapple";

// count total item
echo count($fruits);
