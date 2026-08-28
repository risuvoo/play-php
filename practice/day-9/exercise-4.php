<?php

$checkData = isset($_POST['name']) || isset($_POST['marks']);

if($checkData){ 
    $name = $_POST['name'] ;
    $marks = $_POST['marks'];

    $grade = null;

    if($marks >= 80){
        $grade="A+";
    }elseif($marks >= 70){
         $grade="A";
    }elseif($marks >= 60){
        $grade="B";
    }elseif($marks >= 50){
         $grade="C";
    }elseif($marks >= 40){
         $grade="D";
    }else{
         $grade="F";
    }

    echo "Name: {$name}";
    echo "<br/>";
    echo "Marks: {$marks}";
    echo "<br/>";
    echo "Grade: {$grade}";
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
        <input type="text" name="marks" placeholder="marks">
        <button type="submit">Submit</button>
    </form>
    
</body>