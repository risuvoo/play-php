<?php

require_once "db.php";

$sql = "insert into students (name, email, age) values (:name, :email, :age)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'name'=>'Rafiqul Islam',
    'email'=> 'rafiqul@gmail.com',
    'age'=> 30
]);

