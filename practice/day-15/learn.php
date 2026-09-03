<?php

// Constructor, Properties & Methods


// first Constructor Example

/* 

Remember just 1 thing when you create a object [ex: New User()] then contructor immediately call. No matter what have inside contructor function body but
if you want to execute anything under contructor then you can and you already what is contructor behavior

Syntex:

 public function __construct(type param1, type param 2, ......){}

*/


// Basic Contructor Example:
class User
{
    public string $name;

    public function __construct()
    {
        echo "User object created";
    }
}

$user = new User();

// Contrctor with Parameter Example
class User2
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello(): void
    {
        echo "Hello " . $this->name;
    }
}

$user2 = new User2("Suvo", 25);

echo $user2->name;
echo $user2->age;

echo $user2->sayHello();