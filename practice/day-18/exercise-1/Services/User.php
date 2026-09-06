<?php

namespace App\Services;

Class User
{

    public function getType(){
        echo "I am Service User";
    }

}


$user = new User();

$user->getType();