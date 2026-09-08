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

$sql = "Delete from Students where id = 3";

if($connection->query($sql)){
    echo "Student Deleted".PHP_EOL;
}