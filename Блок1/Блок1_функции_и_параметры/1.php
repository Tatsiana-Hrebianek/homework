<?php
declare(strict_types = 1);

function greetUser(string $name, string $lang = "ru"): void {
    
    if($lang == "ru") {
        echo 'Привет, ' . "$name" . '!';
    } elseif ($lang == "en"){
        echo 'Hello, ' . "$name" . '!';
    }
}

echo greetUser("Иван");      // ✅ "Привет, Иван!"
echo greetUser("John", "en"); // ✅ "Hello, John!"
