<?php

declare(strict_types=1);

require_once('4.php');

class BankAccount implements Payable
{

    private float $balance;

    public function __construct(float|int $balance)
    {
        $this->setBalance($balance);
    }

    public function setBalance(float|int $balance)
    {
        if (is_string($balance)) {
            throw new Exception("Сумма депозита должна быть числом!");
        }

        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function deposit(float|int $deposit)
    {
        $this->balance += $deposit;
    }

    public function withdraw(float|int $withdraw)
    {
        if ($this->balance < $withdraw) {
            throw new Exception("Ошибка: недостаточно средств");
        }

        $this->balance -= $withdraw;
    }

    public function pay(float|int $amount)
    {
        $this->balance -= $amount;        
    }
}

// $account = new BankAccount(1000);
// $account->deposit(500);
// echo $account->getBalance();
// // ✅ 1500

// $account->withdraw(300);
// echo $account->getBalance();
// // ✅ 1200

// $account->withdraw(5000);
// // ❌ Ошибка: недостаточно средств

// $bank = new BankAccount(500);

// $bank->pay(200);  
// // ✅ Баланс уменьшился на 200

// echo $bank->getBalance();