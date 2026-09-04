<?php

abstract class Animal{

    abstract public function makeSound():void;

}

class Dog extends Animal{

    public function makeSound():void
    {
        echo "Woof".PHP_EOL;
    }

}
class Cat extends Animal{
    
    public function makeSound():void
    {
        echo "Mew".PHP_EOL;
    }
}

$dog = new Dog();
$cat = new Cat();

$dog->makeSound();
$cat->makeSound();