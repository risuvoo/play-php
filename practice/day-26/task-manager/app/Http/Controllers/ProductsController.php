<?php

namespace App\Http\Controllers;

class ProductsController extends Controller
{
    public function show(string $category, string|int $id)
    {
        return "Category is {$category}, Product ID is {$id}";
    }
    public function edit(string|int $id)
    {
        return $id;
    }
}
