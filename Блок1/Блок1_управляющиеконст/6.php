<?php

declare(strict_types=1);

function printEvenNumbers(int $n)
{
    $i = 1;
    while ($i <= $n) {
        if ($i % 2 !== 0) {
            $i++;
            continue;
        }

        echo "$i" . PHP_EOL;
        $i++;
    }
}

printEvenNumbers(10);
// ✅ Ожидаемый результат:
// 2
// 4
// 6
// 8
// 10
