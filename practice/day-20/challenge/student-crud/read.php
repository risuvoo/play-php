<?php

require_once __DIR__ ."/db.php";

$sql = "select * from students";

$result = $connection->query($sql);

while($row = $result->fetch_assoc()){
    echo $row['name'];
    echo PHP_EOL;
}