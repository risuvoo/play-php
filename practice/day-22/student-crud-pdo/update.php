<?php 

require_once "db.php";

$sql = "Update students set name = :name, age = :age where id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'name'=> 'Moin Khan',
    'age'=>30,
    'id'=> 2
]);

$getUsersSql = 'select * from students';

$getUsersStmt = $pdo->query($getUsersSql);

$getUsers = $getUsersStmt->fetchAll(PDO::FETCH_ASSOC);

foreach($getUsers as $user){
    echo $user['name'].PHP_EOL;
}