<?php

declare(strict_types=1);

function isAdult(int $age): bool
{
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}
echo isAdult(17);  // ✅ false
echo isAdult(20);  // ✅ true
//echo isAdult('20'); // ❌ Должна быть ошибка TypeError

?>