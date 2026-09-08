<?php

require_once __DIR__ ."/db.php";


$sql = "Update Students set age = 24 where id = 2";

if($connection->query($sql)){
    echo "Student Updated".PHP_EOL;
}