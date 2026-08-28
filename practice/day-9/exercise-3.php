<?php 

if(isset($_GET['number1']) && isset($_GET['number2'])){
    $num1 = $_GET['number1'];
    $num2 = $_GET['number2'];

    $addition = $num1 + $num2;
    $subtraction = $num1 - $num2;
    $multiplication = $num1 * $num2;
    $division = $num1 / $num2;

   echo "Addition: {$addition}";
   echo "<br/>";
   echo "Subtraction: {$subtraction}";
   echo "<br/>";
   echo "Multiplication: {$multiplication}";
   echo "<br/>";
   echo "Division: {$division}";
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
        <input type="text" name="number1">
        <input type="text" name="number2">

        <button type="submit">submit</button>
    </form>
</body>
</html>