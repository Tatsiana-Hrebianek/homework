<?php

declare(strict_types=1);

function generatePassword(int $length = 8, bool $includeNumbers = true, bool $includeSpecialChars = false)
{
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $special = '!@#$%^&*()-_=+[]{}';

    $characters = $letters;

    if ($includeNumbers) {
        $characters .= $numbers;
    }

    if ($includeSpecialChars) {
        $characters .= $special;
    }

    if ($length <= 0 || $characters === '') {
        return '';
    }

    $password = '';
    $maxIndex = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, $maxIndex)];
    }

    return $password;
}

echo generatePassword();  
// ✅ Должен быть 8-значный пароль с цифрами.

echo generatePassword(length: 12, includeSpecialChars: true);  
// ✅ Должен быть 12-значный пароль с цифрами и спецсимволами.

