<?php

require __DIR__ . '/vendor/autoload.php';

use App\Services\UserService;

$userService = new UserService();

$userService->getUserDetails();