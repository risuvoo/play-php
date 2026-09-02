<?php

class Car 
{

    public string $brand;
    public string $model;
    public string $color;
}

$car = new Car();

$car->brand = 'BMW';
$car->model = 'BMW V3';
$car->color = 'Red';

echo "$car->brand\n";
echo "$car->model\n";
echo "$car->color\n";