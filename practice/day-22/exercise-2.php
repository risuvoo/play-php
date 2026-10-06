<?php

require_once "db.php";

$sql = "select * from students  WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'id'=>4
]);
$student=$stmt->fetch(PDO::FETCH_ASSOC);

echo $student['name'];
