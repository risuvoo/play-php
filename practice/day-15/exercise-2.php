<?php

class Product{
    public string $name;
    public string $category;
    public int $price;

    public function __construct(string $name, int $price, string $category){
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    public function showProduct(){
        echo "Name: ".$this->name.PHP_EOL;
        echo "Category: ".$this->category.PHP_EOL;
        echo "Price: ".$this->price.PHP_EOL;
    }
}

$user = new Product('Iphone 14 Pro', 1000, 'Smart Phones' );

$user->showProduct();
