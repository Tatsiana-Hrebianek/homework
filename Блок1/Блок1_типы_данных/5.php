<?php
declare(strict_types = 1);

function formatValue(int|float|string $number): string{

    return (string)$number;
}

echo formatValue(100);      // ✅ "100"
echo formatValue(99.99);    // ✅ "99.99"
echo formatValue("hello");  // ✅ "hello"
// echo formatValue(true);     // ❌ Должна быть ошибка TypeError

