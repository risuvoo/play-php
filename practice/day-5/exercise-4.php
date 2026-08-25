<?php

$skills = [
    "PHP",
    "Laravel",
    "JavaScript",
    "Vue"
];

//input
$item = "JavaScript";

// find item index
$findIndex = array_search($item, $skills);

// output 
echo $item." Position: ".$findIndex;