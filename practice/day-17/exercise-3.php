<?php

trait Logger{
    
    public function log(string $message): void
    {
        echo "LOG: {$message}".PHP_EOL;
    }
}

class User{
    
    use Logger;

}
class Order{

    use Logger;

}

$user = new User();
$order = new Order();

$user->log("User Logger");
$order->log("Order Logger");