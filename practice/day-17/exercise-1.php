<?php

interface PaymentMethod{

    public function pay():void;

}

class BkashPayment implements PaymentMethod {

    public function pay():void{
        echo "Paid using Bkash".PHP_EOL;
    }

}

class CardPayment implements PaymentMethod{

    public function pay():void{
        echo "Paid using Card".PHP_EOL;
    }

}

$bkashPayment = new BkashPayment();
$cardPayment = new CardPayment();

$bkashPayment->pay();
$cardPayment->pay();