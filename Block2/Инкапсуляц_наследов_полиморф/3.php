<?php

declare(strict_types=1);

require_once('1.php');
require_once('4.php');

class CreditAccount extends BankAccount implements Payable
{

    public function withdraw(float|int $withdraw)
    {
        $newBalance = $this->getBalance() - $withdraw;
        $this->setBalance($newBalance);
    }

    public function pay(float|int $amount)
    {
        $newBalance = $this->getBalance() - $amount;
        $this->setBalance($newBalance);
    }
}

// $credit = new CreditAccount(1000);
// $credit->withdraw(1500);
// echo $credit->getBalance();  
// ✅ -500 (допустимый минус)

$credit = new CreditAccount(500);
$credit->pay(700);
echo $credit->getBalance();  
// ✅ Баланс ушел в -200 (кредитный лимит)
