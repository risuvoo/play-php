<?php

require_once __DIR__ ."/db.php";


$sql = "Insert into students (
    name,
    email,
    age
) values ('loram', 'loram@gmail.com', 32)";

if($connection->query($sql)){
    echo "Students Created".PHP_EOL;
}