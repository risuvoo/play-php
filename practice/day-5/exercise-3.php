<?php

$skills = [
    "PHP",
    "Laravel",
    "JavaScript",
    "Vue",
    "MySQL"
];

// input
$item = "Laravel";

// check item exist into array or not
$checkItemExistOrNot = in_array($item, $skills);

// output based on condition
if($checkItemExistOrNot){
    echo $item." Found";
}else{
    echo $item." Not Found";
}