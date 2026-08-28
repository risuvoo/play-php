<?php

$checkData = isset($_POST['name']) || isset($_POST['email']) || isset($_POST['profession']);

if($checkData){ 
    $name = $_POST['name'] ;
    $email = $_POST['email'];
    $profession = $_POST['profession'];  

    echo "Name: {$name}";
    echo "<br/>";
    echo "Email: {$email}";
    echo "<br/>";
    echo "Profession: {$profession}";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="profession" placeholder="Profession">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>