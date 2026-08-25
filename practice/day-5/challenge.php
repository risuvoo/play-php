<?php

$products = [
    [
        "name" => "Laptop",
        "price" => 80000,
        "stock" => 5
    ],
    [
        "name" => "Mouse",
        "price" => 1500,
        "stock" => 20
    ],
    [
        "name" => "Keyboard",
        "price" => 3000,
        "stock" => 0
    ],
    [
        "name" => "Monitor",
        "price" => 25000,
        "stock" => 8
    ]
];

/* Tasks
1. Print all product name
2. Only print product which product in stock
3. how many product out of stock
4. Calculate all products total price
5. Only print product which product price more than 10000
*/

// task 1
foreach($products as $product){
     echo $product["name"] . "\n";
};

// task 2
foreach($products as $product){
    // check product in stock
     if ($product["stock"] > 0) {
        echo $product["name"] . "\n";
    }
}

// task 3
$outOfStockProducts = 0;
foreach($products as $product){
    // check product in stock
    if ($product["stock"] === 0) {
        $outOfStockProducts++;
    }
}
echo "Out of Stock: " . $outOfStockProducts;

// task 4
$totalProductsPrice = 0;
foreach($products as  $product){
    $totalProductsPrice += $product["price"];
}
echo "Total Price: " . $totalProductsPrice;

// task 5
foreach($products as $product){
    // check product price more than 10000
   if ($product["price"] > 10000) {
        echo $product["name"] . "\n";
    }
}