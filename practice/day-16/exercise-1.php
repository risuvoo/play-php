<?php

class BankAccount{

    private $balance;

    public function deposit(int $amount){
        if($amount > 0){
            $this->balance += $amount;
        }
    }

    public function withdraw(int $amount){
        if($amount <= $this->balance){
            $this->balance -= $amount;
        }
    }

    public function getBalance(){
        return $this->balance;
    }

}

$bankAccount = new BankAccount();

// echo $bankAccount -> balance; // Throw Fatal error Because $balance is private property 

$bankAccount->deposit(2000);
$bankAccount->withdraw(1999);

$currentBalance = $bankAccount->getBalance();

echo $currentBalance;