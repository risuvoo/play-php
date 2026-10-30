<?php

require_once __DIR__ . "../../config/db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];


// query
$sql = "Update students set name = :name, email = :email, age = :age where id = :id";

// prepare
$stmt = $pdo->prepare($sql);

// exexute
$stmt->execute([
    'name'=> $name,
    'email'=> $email,
    'age' => $age,
    'id' => $id
]);
