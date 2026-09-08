<?php

$connection = new mysqli(
    'localhost',
    'root',
    '',
    'school_management'
);

if($connection->connect_error){
    die("Connection Failed".$connection->connect_error.PHP_EOL);
}

echo "Database Connected".PHP_EOL;

$sql = "select * from students";

$result = $connection->query($sql);

while($row = $result->fetch_assoc()){
    echo $row['name'];
    echo PHP_EOL;
}