<?php

// get method
/* 
$name = $_GET['name'];
$email = $_GET['email'];

echo "Name: {$name}\n";
echo "Email: {$email}";
*/

// post method
/* 
$name = $_POST['name'];
$email = $_POST['email'];

echo $name;
echo $email;
*/

// isset() check করে variable/key set আছে কিনা এবং null নয় কিনা।
if (isset($_GET['name'])) {
    $name = $_GET['name'];

    echo $name;
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
    <!-- get -->
    <!-- 
    <form method="GET">

        <input type="text" name="name">

        <input type="text" name="email">

        <button type="submit">
            Submit
        </button>
    </form>
    -->
        
    <!-- post -->
    <!-- 
     <form method="POST">

        <input type="text" name="name">

        <input type="email" name="email">

        <button type="submit">
            Submit
        </button>
    </form>
    -->

    <!-- isset() -->
    <form method="GET">
        <input type="text" name="name">

        <input type="text" name="email">

        <button type="submit">
            Submit
        </button>
    </form>

</body>
</html>