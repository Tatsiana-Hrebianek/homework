<?php
declare(strict_types = 1);

function calculateDiscount(float $price, float $discount = 10): float {

    return $price - $price*$discount/100;

}

echo calculateDiscount(price: 1000);        // ✅ Ожидаемый результат: 900
echo calculateDiscount(price: 2000, discount: 20); // ✅ Ожидаемый результат: 1600
