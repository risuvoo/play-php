<?php

class BankAccount{

   public string $accountHolder;
   public int $balance;

   public function __construct(string $accountHolder, int $balance){
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
   }

   public function deposit(int $amount):void{
        $this->balance += $amount;

   }

   public function withdraw(int $amount):void{
        if($this->balance >= $amount){
            $this->balance -= $amount;
        }
   }

   public function getBalance():int{
        return $this->balance;
   }

}

$bankAccount = new BankAccount('Suvo', 1000);

$bankAccount->deposit(500);
$bankAccount->withdraw(200);
$currentBalance = $bankAccount ->getBalance();

echo "Current Balance: {$currentBalance}\n";

$anotherBankAccount = new BankAccount('Moin', 2000);
$anotherBankAccount->deposit(400);
$anotherBankAccount->withdraw(700);
$currentBalanceForAnotherAccount = $anotherBankAccount ->getBalance();

echo "Current Balance Moin: {$currentBalanceForAnotherAccount}\n";
