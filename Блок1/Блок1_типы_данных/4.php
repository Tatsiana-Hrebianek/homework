<?php

declare(strict_types=1);

function getNamesLength(array $strings): array
{   
    foreach($strings as $string){
        if(!is_string($string)){
            throw new TypeError("только строки разрешены");
        }        
    }

    return array_map('strlen', $strings);

}

print_r(getNamesLength(["Alice", "Bob", "Charlie"])); 
// ✅ Ожидаемый результат: [5, 3, 7]

print_r(getNamesLength([123, "Bob", "Charlie"])); 
// ❌ Должна быть ошибка TypeError (только строки разрешены)
