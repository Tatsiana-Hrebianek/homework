<?php
declare(strict_types = 1);

function factorial(int $n): int {

    $fact = 1;
    $i = 2;

    while($i <= $n) {
        $fact *= $i;
        $i++;
    }

    return $fact;

}

echo factorial(5);  // ✅ 120
echo factorial(3);  // ✅ 6
echo factorial(1);  // ✅ 1
echo factorial(0);  // ✅ 1
