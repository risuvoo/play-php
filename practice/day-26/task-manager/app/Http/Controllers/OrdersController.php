<?php

namespace App\Http\Controllers;

class OrdersController extends Controller
{
   public function show(string|int $id)
   {
    return "The ID is: {$id}";
   }
}
