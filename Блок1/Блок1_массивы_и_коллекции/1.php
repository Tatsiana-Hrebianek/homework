<?php
declare(strict_types = 1);

function filterEvenNumbers(array $numbers): array
{
    return array_filter($numbers, fn($num) => $num % 2 === 0);
}

print_r(filterEvenNumbers([1, 2, 3, 4, 5, 6]));
// ✅ Ожидаемый результат: [2, 4, 6]

print_r(filterEvenNumbers([11, 15, 21])); 
// ✅ Ожидаемый результат: []


function squareNumbers(array $numbers): array {
    return array_map(fn($num) => $num ** 2, $numbers);
}

print_r(squareNumbers([1, 2, 3, 4])); 
// ✅ Ожидаемый результат: [1, 4, 9, 16]

print_r(squareNumbers([-2, 5, 10])); 
// ✅ Ожидаемый результат: [4, 25, 100]


function getUserEmails(array $users): array {
    $emails = [];
    foreach ($users as $user){
        if (isset($user['email'])){
            $emails[] = $user['email'];
        }
    }
    return $emails;
}

$users = [
    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
];

print_r(getUserEmails($users));
// ✅ Ожидаемый результат: ["alice@example.com", "bob@example.com"]
