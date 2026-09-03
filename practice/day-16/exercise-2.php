<?php

class Employee{

    public string $name;
    public int $salary;

    public function __construct(string $name, int $salary ){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function work(){
        echo $this->name." is Working.".PHP_EOL;
    }

}

class Developer extends Employee{

    public function writeCode(){
        echo $this->name." is writing code.".PHP_EOL;
    }

}

class Designer extends Employee{
     public function createDesign(){
        echo $this->name."is creating design.".PHP_EOL;
    }
}

$developer = new Developer("Karim", 50000);
$designer = new designer("Rahim", 30000);

$developer->work();
$developer->writeCode();

$designer->work();
$designer->createDesign();