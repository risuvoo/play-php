<?php

setcookie(
    "name",
    "Suvo",
    time() + 3600
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello, <?php echo isset($_COOKIE["name"])?  $_COOKIE["name"] : '' ?> </p>
</body>
</html>