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

$sql = "Insert into students (
    name,
    email,
    age
) values 
('karim', 'karim@gmail.com', 76),
('korim', 'korim@gmail.com', 35),
('karam', 'karam@gmail.com', 65)";

if($connection->query($sql)){
    echo "Students Created".PHP_EOL;
}