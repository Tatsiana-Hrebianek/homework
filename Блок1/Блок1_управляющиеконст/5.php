<?php
declare(strict_types = 1);

function printArrayItems(array $arr) {
    
    foreach($arr as $elem){
        echo "$elem" . PHP_EOL;
    }
}

printArrayItems(["apple", "banana", "cherry"]);
// ✅ Ожидаемый результат:
// apple
// banana
// cherry
