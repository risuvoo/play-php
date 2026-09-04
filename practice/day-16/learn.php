<?php

// Encapsulation, Getter & Setter Inheritance & Polymorphism


/* == Encapsulation ================================================

# Defination: Object-এর data এবং সেই data নিয়ে কাজ করার logic-কে একসাথে রাখা এবং data-তে controlled access দেওয়া হলো Encapsulation।

# Encapsulation এই তিনটা modifier আছে। ( public, private, protected )
publc ->  সব জায়গা থেকে access করা যায়
private -> শুধু একই class-এর ভিতর থেকে access করা যায়
protected -> একই class + child class থেকে access করা যায়

# Real Life Example
ধরো একটা Bank Account class এ  balance, deposit(), withdraw()| আমরা চাই না বাইরের যেকোনো code সরাসরি balance পরিবর্তন করে ফেলুক ($account->balance = -500000;) ।
Encapsulation ব্যবহার করলে আমরা বলব, Balance সরাসরি change করা যাবে না। deposit() বা withdraw() method-এর মাধ্যমে change করতে হবে।

# Code example:
class BankAccount
{
    private int $balance;

    public function getBalance(): int
    {
        return $this->balance;
    }
}

এখন বাইরে থেকে $account->balance; করলে error হবে। কারণ balance private শুধু BankAccount class-এর ভিতরে accessible কিন্তু $account->getBalance(); কাজ করবে। কারণ getBalance() public।

*/

/* == Inheritance ================================================ 

# Defination:  একটি class অন্য একটি class-এর properties এবং methods inherit করতে পারে।

# Code example:
class Animal
{
    public string $name;

    public function eat(): void
    {
        echo "Animal is eating";
    }
}

class Dog extends Animal
{
}

$dog = new Dog();

$dog->name = "Tommy";

*/


/* == Polymorphism / Method Overloading ================================================  

#Defination: একই interface/method বিভিন্ন object-এ different behavior দিতে পারে।

#Code Example: 
class Animal
{
    public function makeSound(): void
    {
        echo "Animal sound";
    }
}

class Dog extends Animal
{
    public function makeSound(): void
    {
        echo "Woof";
    }
}

class Cat extends Animal
{
    public function makeSound(): void
    {
        echo "Meow";
    }
}

এখানে তিন জায়গায় একই method: makeSound()

কিন্তু behavior আলাদা।

Animal → Animal sound
Dog    → Woof
Cat    → Meow

# Method Overloading :  Child class parent-এর method নিজের মতো করে implement করতে পারে। খেয়াল করলে দেখবে parent makeSound() method টা অন্য class গিয়া different হয়ে যাচ্ছে + different behavior দিতে আছে।

# parent::
Child class থেকে parent-এর method call করতে চাইলে ex: parent::methodName();

# Code Example:
class Animal
{
    public function makeSound(): void
    {
        echo "Some sound";
    }
}

class Dog extends Animal
{
    public function makeSound(): void
    {
        parent::makeSound();
        echo " Woof";
    }
}

এখানে  parent::makeSound(); parent class-এর method call করছে।

*/

/* == Protected ==============================

এখন protected-এর practical use দেখো।

class User
{
    protected string $name;

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

class Admin extends User
{
    public function showName(): void
    {
        echo $this->name;
    }
}

Admin child class হওয়ায় protected $name access করতে পারছে। কিন্তু বাইরে থেকে $admin->name; করা যাবে না

⚠️ Private ->  parent class-এর একান্ত internal property
⚠️ protected -> parent + child-এর জন্য available
*/