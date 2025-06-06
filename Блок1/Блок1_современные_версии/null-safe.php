<?php

function getUserEmail(object $user): string{
    return $user?->profile?->email ?? "Email не найден";
}

$user = (object)[
    'profile' => (object)[
        'email' => 'test@example.com'
    ]
];
echo getUserEmail($user); // ✅ "test@example.com"

$user = (object)[
    'profile' => null
];
echo getUserEmail($user); // ✅ "Email не найден"
