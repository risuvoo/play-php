<?php

require_once __DIR__ . "../../config/db.php";

$id = trim($_POST['id']);
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

header("Location: index.php");
exit;