<?php

class Animal
{
    public function makeSound(): void
    {
        echo "Some sound".PHP_EOL;
    }
}

class Dog extends Animal
{
    public function makeSound(): void
    {
        parent::makeSound();
        echo " Woof".PHP_EOL;
    }
};

class Cat extends Animal
{
    public function makeSound(): void
    {
        parent::makeSound();
        echo " Mew".PHP_EOL;
    }
};

class Cow extends Animal
{
    public function makeSound(): void
    {
        parent::makeSound();
        echo " Moo".PHP_EOL;
    }
};

$dog = new Dog();

$dog->makeSound();

$cat = new Cat();

$cat->makeSound();

$cow = new Cow();

$cow->makeSound();
