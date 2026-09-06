<?php

namespace App\Models;

Class User
{

    public function getType(){
        echo "I am Model User";
    }

}


$user = new User();

$user->getType();