<?php

require_once __DIR__."/functions/calculation.php";

$a = 20;
$b = 10;

$addition = addition($a, $b);
$subtraction = subtraction($a, $b);
$multiplication = multiplication($a, $b);
$division = division($a, $b);

echo "Addition: {$addition}";
echo "<br/>";
echo "Subtraction: {$subtraction}";
echo "<br/>";
echo "Multiplication: {$multiplication}";
echo "<br/>";
echo "Division: {$division}";