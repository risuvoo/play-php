<?php

class Student 
{

    public string $name;
    public int $age;
    public string $course;
}

$student = new Student();

$student->name = 'Rahim';
$student->age = 20;
$student->course = 'OOP Fundamentals';

echo "======For Student 1======\n";
echo "$student->name\n";
echo "$student->age\n";
echo "$student->course\n";

$student2 = new Student();
$student2->name = "Karim";
$student2->age = 21;
$student2->course = "Function Fundamentals";

echo "======For Student 2======\n";
echo "$student2->name\n";
echo "$student2->age\n";
echo "$student2->course\n";