<?php

class Payment
{
    protected int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function pay(): void
    {
        echo "Generic payment of {$this->amount}".PHP_EOL;
    }
}

class BkashPayment extends Payment
{
    public function pay(): void
    {
        echo "Paid {$this->amount} using Bkash".PHP_EOL;
    }
}

class CardPayment extends Payment
{
    public function pay(): void
    {
        echo "Paid {$this->amount} using Card".PHP_EOL;
    }
}

class CashPayment extends Payment
{
    public function pay(): void
    {
        echo "Paid {$this->amount} using Cash".PHP_EOL;
    }
}

$bkash = new BkashPayment(1000);
$card = new CardPayment(2000);
$cash = new CashPayment(500);

$bkash->pay();
$card->pay();
$cash->pay();