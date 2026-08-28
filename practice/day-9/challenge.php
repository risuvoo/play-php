<?php

$checkData = isset($_POST['name']) && isset($_POST['email']) && isset($_POST['profession']) && isset($_POST['age']);

if($checkData){ 
    $name = trim($_POST['name']) ;
    $email = trim(strtolower($_POST['email']));
    $profession = $_POST['profession'];  
    $age = $_POST['age'];
    
    if(strpos($email, '@') !== false){
        echo "========================";
        echo "<br/>";
        echo "REGISTRATION SUCCESSFUL";
        echo "<br/>";
        echo "========================";
        echo "<br/>";
        echo "<br/>";
        echo "Name: {$name}";
        echo "<br/>";
        echo "Email: {$email}";
        echo "<br/>";
        echo "Age: {$age}";
        echo "<br/>";
        echo "Profession: {$profession}";
    }else{
        echo "Invalid email format";
    }
}else{
    echo "All fields are required";
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
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="age" placeholder="Age">
        <input type="text" name="profession" placeholder="Profession">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>