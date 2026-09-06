<?php

namespace App\Services;

require_once __DIR__ . '/../vendor/autoload.php';  // ⚠️ Very Important 

use App\Models\Product;

class Order
{

    public function show(){
        $product = new Product();
        $product->getProductDetails();
    }

}

$order = new Order();
$order->show();