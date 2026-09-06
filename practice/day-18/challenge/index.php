<?php

require __DIR__ . "/vendor/autoload.php";

use App\Services\UserService;
use App\Models\Product;

$userService = new UserService();
$product = new Product();

$userService->getUserDetails();
$product->getProductInfo();