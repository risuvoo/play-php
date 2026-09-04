<?php

trait Logger{
    public function log(string $message): void
    {
        echo "LOG: {$message}".PHP_EOL;
    }
}

interface PaymentMethod {

    public function pay(int $amount):void;

}

abstract class Payment {
    protected int $amount;

    public function __construct(int $amount){
        $this->amount = $amount;
    }

    public function showAmount(){
        return $this->amount;
    }
}

class BkashPayment extends Payment implements PaymentMethod {

    use Logger;
    public function pay(int $amount):void{
        $this->log("Payment Using Bkash");
        $this->amount -= $amount;
        echo "Available Balance: ".$this->showAmount().PHP_EOL;
    }
}
class cardPayment extends Payment implements PaymentMethod {

    use Logger;
    public function pay(int $amount):void{
        $this->log("Payment Using Card");
        $this->amount -= $amount;
        echo "Available Balance: ".$this->showAmount().PHP_EOL;
    }

}
class cashPayment extends Payment implements PaymentMethod {

     use Logger;
     public function pay(int $amount):void{
        $this->log("Payment Using Cash");
        $this->amount -= $amount;
        echo "Available Balance: ".$this->showAmount().PHP_EOL;
    }

}

$bkashpayment = new BkashPayment(500);
$cardPayment = new CardPayment(1000);
$cashPayment = new CashPayment(320);

$bkashpayment->pay(100);
$cardPayment->pay(200);
$cashPayment->pay(300);


