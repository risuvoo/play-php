<?php

class User 
{

    public string $name;

    public function sayHello(){
        echo "Hello, " . $this->name;
    }
}

$user = new User();

$user->name = "Suvo";

$user->sayHello();