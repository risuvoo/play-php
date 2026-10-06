<?php 


// exercise 1
$pdo = new PDO(
    "mysql:host=localhost;dbname=school_management",
    "root",
    "password"
);

$pdo->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);