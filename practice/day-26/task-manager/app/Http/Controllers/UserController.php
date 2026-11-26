<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function edit(string|int $id)
    {
        return $id;
    }
    public function show(string $name)
    {
        return "This user name is: {$name}";
    }
}
