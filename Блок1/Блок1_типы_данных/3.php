<?php
declare(strict_types = 1);

function calculateTax(float $price, float $tax): string{
    $totalprice = $price + $price*$tax;
    // return round($totalprice, 2);
    return number_format($totalprice, 2, '.', '');
}

echo calculateTax(100, 0.2);  // ✅ Ожидаемый результат: 120.00
echo calculateTax(50, 0.15);  // ✅ Ожидаемый результат: 57.50
echo calculateTax(99.99, 0.05); // ✅ Ожидаемый результат: 104.99

