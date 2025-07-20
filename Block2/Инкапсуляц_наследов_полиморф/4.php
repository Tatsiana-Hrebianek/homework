<?php

declare(strict_types=1);

interface Payable {
    public function pay(float|int $amount);
}