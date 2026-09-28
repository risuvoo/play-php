<?php

/* PDO + Prepared Statements

$pdo = new PDO(
    "mysql:host=localhost;dbname=school_management",
    "root",
    ""
);

$pdo->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);

## PDO::ATTR_ERRMODE মানে database error কীভাবে handle করবে।
## PDO::ERRMODE_EXCEPTION মানে database error হলে exception throw করবে।

## PDO দিয়ে SELECT
require_once "db.php";

$sql = "SELECT * FROM students";

$stmt = $pdo->query($sql);

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($students as $student) {
    echo $student['name'] . PHP_EOL;
}

## fetch() বনাম fetchAll()
fetch()
→ একটি row

fetchAll()
→ সব matching rows

## Prepared Statement
$sql = "SELECT * FROM students WHERE id = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([1]);

$student = $stmt->fetch(PDO::FETCH_ASSOC);

এখানে WHERE id = ? তারপর $stmt->execute([1]) 1 গিয়ে ?-এর জায়গায় value হিসেবে bind হবে।

## Named Placeholder
$sql = "SELECT * FROM students WHERE id = :id"; // ? ব্যবহার করার পাশাপাশি নামও দিতে পারো:

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'id' => 1
]);

## User Input + Prepared Statement
$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'id' => $id
]);

$student = $stmt->fetch(PDO::FETCH_ASSOC);

## INSERT with Prepared Statement
$sql = "INSERT INTO students (name, email, age)
        VALUES (:name, :email, :age)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'name' => 'Rahim',
    'email' => 'rahim@gmail.com',
    'age' => 25
]);

এখানে :name, :email, :age সবগুলো placeholder

## UPDATE
$sql = "UPDATE students
        SET name = :name, age = :age
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'name' => 'Rahim Khan',
    'age' => 30,
    'id' => 2
]);

## DELETE
$sql = "DELETE FROM students
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'id' => 5
]);

## prepare() এবং execute() 
prepare()  SQL statement প্রস্তুত করে, execute() তার মধ্যে values পাঠিয়ে query execute করে।

## query() বনাম prepare()
query() যেখানে কোনো user input নেই, prepare() যেখানে User input আছে

## PDO Exception Handling
try {

    $pdo = new PDO(
        "mysql:host=localhost;dbname=school_management",
        "root",
        ""
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {

    echo "Database Error: " . $e->getMessage();
}

এখানে PDOException হলো PDO-related exception

*/

