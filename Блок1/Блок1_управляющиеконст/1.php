<?php
declare(strict_types = 1);

function checkNumber(int $number): string{

    if($number > 0) {
        return 'Положительное';
    } elseif($number < 0) {
        return 'Отрицательное';
    } else {
        return 'Ноль';
    }
}

echo checkNumber(10);   // ✅ "Положительное"
echo checkNumber(-5);   // ✅ "Отрицательное"
echo checkNumber(0);    // ✅ "Ноль"
