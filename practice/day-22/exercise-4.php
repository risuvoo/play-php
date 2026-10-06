<?php

require_once "db.php";

$sql = "INSERT INTO students (name, email, age)
        VALUES (:name, :email, :age)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'name' => 'Shahidul Islam',
    'email' => 'shahidul@gmail.com'
    'age' => 45
]);