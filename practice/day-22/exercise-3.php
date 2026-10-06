<?php

require_once "db.php";

$sql = "select * from students";
$stmt = $pdo->query($sql);
$students=$stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($students as $student){
    echo "ID: " . $student['id'] . PHP_EOL;
    echo "Name: " . $student['name'] . PHP_EOL;
    echo "Email: " . $student['email'] . PHP_EOL;
    echo "Age: " . $student['age'] .PHP_EOL;
}