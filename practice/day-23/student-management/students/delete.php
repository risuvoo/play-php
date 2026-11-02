<?php

require_once __DIR__. "../../config/db.php";

$id = $_POST['id'];

$sql = "delete from students where id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'id'=>$id
]);

header("Location: index.php");
exit;