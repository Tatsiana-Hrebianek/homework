<?php

declare(strict_types=1);

function formatText(string $text, bool $uppercase = false): string
{
    $str = '';
    if ($uppercase === true) {
        $str =  strtoupper($text);
    } else {
        $str = $text;
    }

    return $str;
}

echo formatText("hello");       // ✅ "hello"
echo formatText("hello", true); // ✅ "HELLO"
