<?php

class Student{

    public string $name;
    public int $age;
    public string $course;
    public array $marks;

    public function __construct(string $name, int $age, string $course, array $marks){

        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
        $this->marks = $marks;

    }

    public function getAverage(){
        $avg = array_sum($this->marks) / count($this->marks);
        return $avg;
    }

    public function getGrade(){

        $average = $this->getAverage();

        if ($average >= 80) {
            return "A";
        } elseif ($average >= 70) {
            return "B";
        } elseif ($average >= 60) {
            return "C";
        } elseif ($average >= 50) {
            return "D";
        }else {
            return "F";
        }
    }
    

    public function showProfile(){
        echo "Student Name: ".$this->name.PHP_EOL;
        echo "Student Age: ".$this->age.PHP_EOL;
        echo "Student Course: ".$this->course.PHP_EOL;
        echo "Student Grade: ".$this->getGrade().PHP_EOL;
    }

}

$student = new Student('Suvo', 30, 'PHP/Laravel', [80, 75, 90]);

$student->showProfile();