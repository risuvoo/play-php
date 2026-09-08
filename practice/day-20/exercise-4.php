<?php

$connection = new mysqli(
    'localhost',
    'root',
    '',
    'school_management'
);

if($connection->connect_error){

    die('Connection Failed'.$connection->connect_error).PHP_EOL;

}

echo 'Database Connected'.PHP_EOL;

$sql = "Update Students set age = 25 where id = 1";

if($connection->query($sql)){
    echo "Student Updated".PHP_EOL;
}