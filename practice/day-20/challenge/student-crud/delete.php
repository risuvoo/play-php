<?php

require_once __DIR__ ."/db.php";

$sql = "Delete from Students where id = 9";

if($connection->query($sql)){
    echo "Student Deleted".PHP_EOL;
}