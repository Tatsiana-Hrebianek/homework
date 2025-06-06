<?php
declare(strict_types = 1);

function printNumbers(int $number){
    for($i = 1; $i <= $number; $i++) {
        
        echo $i . PHP_EOL;
        
    }
}

printNumbers(5);
// ✅ Ожидаемый результат:
// 1
// 2
// 3
// 4
// 5
