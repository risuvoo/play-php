<?php 

if(isset($_GET['name']) && isset($_GET['age'])){
    echo  "Name: {$_GET['name']}";
    echo "<br/>";
    echo "Age: {$_GET['age']}";
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
    <form method="get">
        <input type="text" name="name">
        <input type="text" name="age">

        <button type="submit">submit</button>
    </form>
</body>
</html>