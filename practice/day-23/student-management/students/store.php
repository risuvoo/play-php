<?php

require_once __DIR__ . "../../config/db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

// query
$sql = "INSERT INTO students (name, email, age) VALUES (:name, :email, :age)";

// prepare
$stmt = $pdo->prepare($sql);    

// exexute
$stmt->execute([
    'name'=> $name,
    'email'=> $email,
    'age' => $age
])
