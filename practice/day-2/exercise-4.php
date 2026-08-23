<?php

$monthlySalary = 50000;
$bonus = 20000;
$tax=5000;

$totalIncome = $monthlySalary + $bonus;
$afterTaxIncome = $totalIncome - $tax;

echo "Total Income: ". $totalIncome;
echo "After Tax Income: ". $afterTaxIncome;
