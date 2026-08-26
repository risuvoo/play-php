<?php

$student = [
    "name" => "Suvo",
    "marks" => [
        80,
        75,
        90,
        85,
        70
    ]
];

function calculateTotal(array $marks): int
{
    $totalMarks = 0;

    foreach ($marks as $mark) {
        $totalMarks += $mark;
    }

    return $totalMarks;
}

function calculateAverage(array $marks): float
{
    $totalMarks = calculateTotal($marks);

    return $totalMarks / count($marks);
}

function findGrade(float $average): string
{
    if ($average >= 80) {
        return "A+";
    } elseif ($average >= 70) {
        return "A";
    } elseif ($average >= 60) {
        return "B";
    } elseif ($average >= 50) {
        return "C";
    } elseif ($average >= 40) {
        return "D";
    } else {
        return "F";
    }
}

$totalMarks = calculateTotal($student['marks']);

$average = calculateAverage($student['marks']);

$grade = findGrade($average);

echo "Name: " . $student["name"] . PHP_EOL;
echo "Total Marks: " . $totalMarks . PHP_EOL;
echo "Average: " . $average . PHP_EOL;
echo "Grade: " . $grade . PHP_EOL;