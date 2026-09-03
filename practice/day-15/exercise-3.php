<?php

class Calculator{
    public function add(int $num1, int $num2):int{
        return $num1 + $num2;
    }

    public function subtract(int $num1, int $num2):int{
        return $num1 - $num2;
    }

    public function multiply(int $num1, int $num2):int{
        return $num1 * $num2;
    }
}

$calculator = new Calculator();


// case 1: Arguments is 20, 10. Now need to calculate value of addition, subtract, multiply
echo "Add: ".$calculator->add(20, 10).PHP_EOL;
echo "Subtract: ".$calculator->subtract(20, 10).PHP_EOL;
echo "Muliply: ".$calculator->multiply(20, 10).PHP_EOL;

// case 2: Arguments is 76, 23. Now need to calculate value of addition, subtract, multiply
echo "Add: ".$calculator->add(76, 23).PHP_EOL;
echo "Subtract: ".$calculator->subtract(76, 23).PHP_EOL;
echo "Muliply: ".$calculator->multiply(76, 23).PHP_EOL;


