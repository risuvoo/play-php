<?php

require_once "db.php";

$sql = "delete from students where id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'id'=> 1
]);