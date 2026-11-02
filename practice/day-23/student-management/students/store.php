<?php

require_once __DIR__ . "../../config/db.php";

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$age = trim($_POST['age']);

if(empty($name)){
    die("Name is required");
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    die("Invalid email");
}

if($age<1){
    die("Invalid age");
}

// query
$sql = "INSERT INTO students (name, email, age) VALUES (:name, :email, :age)";

// prepare
$stmt = $pdo->prepare($sql);    

// exexute
$stmt->execute([
    'name'=> $name,
    'email'=> $email,
    'age' => $age
]);

header("Location: index.php");
exit;