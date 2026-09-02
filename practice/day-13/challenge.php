<?php

class BankAccount{

    public string $accountHolder;
    public int $balance;

    public function deposit(int $amount){
        $currentBalance = $this->balance + $amount;
        $this->balance = $currentBalance;
    }

    public function withdraw(int $amount){
        $currentBalance = $this->balance - $amount;
        $this->balance = $currentBalance;
    }    

}

$bankAccount = new BankAccount();

$bankAccount->accountHolder = "Suvo";
$bankAccount->balance = 1000;

$bankAccount->deposit(500);
$bankAccount->withdraw(200);

echo "Account Holder: ".$bankAccount->accountHolder . PHP_EOL;
echo "Final Balance: ".$bankAccount->balance . PHP_EOL;