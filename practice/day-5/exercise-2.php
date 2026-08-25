<?php

// Associative Array

/* Make this data using Associative array
- name
- age
- profession
- country
- salary
*/

/* Output should be like this
Name: Suvo
Age: 28
Profession: Software Engineer
Country: Bangladesh
Salary: 50000
*/

$userDetails = [
    "name" => "Suvo",
    "age" => 28,
    "profession" => "Software Engineer",
    "country" => "Bangladesh",
    "salary" => "50000",
];

foreach($userDetails as $key => $userDetail){
    echo ucfirst($key) . ": ". $userDetail . "\n";
}