<?php

class User{
    public string $name;
    public string $email;
    public int $age;

    public function __construct(string $name, string $email, int $age){
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    public function getUserInfo(){
        echo "Name: ".$this->name.PHP_EOL;
        echo "Email: ".$this->email.PHP_EOL;
        echo "Age: ".$this->age.PHP_EOL;
    }
}

$user = new User('Suvo', 'suvo@gmail.com', 30);

$user->getUserInfo();
