<?php
declare(strict_types = 1);

function multiply(int|float $number1, int|float $number2): int|float{
    return $number1 * $number2;
}

echo multiply(3, 2);     // ✅ Ожидаемый результат: 6
echo multiply(3.5, 2);   // ✅ Ожидаемый результат: 7.0
// echo multiply('3', 2);   // ❌ Должна быть ошибка TypeError
