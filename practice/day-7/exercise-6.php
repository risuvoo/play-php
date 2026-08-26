<?php

$product = [
    "name" => "Laptop",
    "price" => 80000,
    "quantity" => 2
];

function calculateTotal($product){
    $totalPrice = $product['price']*$product['quantity'];
    return $totalPrice;
}

$result = calculateTotal($product);
echo $result;