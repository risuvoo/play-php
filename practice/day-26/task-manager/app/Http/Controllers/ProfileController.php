<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function show(string $name = "Guest")
    {
        return "Hello, {$name}";
    }
};
