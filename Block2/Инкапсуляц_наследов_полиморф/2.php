<?php

declare(strict_types=1);

require_once('1.php');

class SavingsAccount extends BankAccount {

    private int $rate;

    public function __construct(float $balance, int $rate)
    {
        parent::__construct($balance);
        
        $this->rate = $rate;

    }    

    public function applyInterest(){
        $newBalance = $this->getBalance() + $this->getBalance()*($this->rate/100);
        $this->setBalance($newBalance);
    }
}

$savings = new SavingsAccount(1000, 5);
$savings->applyInterest();
echo $savings->getBalance();  
// ✅ 1050
