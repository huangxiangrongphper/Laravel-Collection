<?php
require __DIR__ . '/vendor/autoload.php';

$employees = [
    [
        'name' => 'Flourishing',
        'email' => 'Flourishing@outlook.com',
        'company' => 'Laravel Inc'
    ],
    [
        'name' => 'perfectbook',
        'email' => 'perfectbook@example.com',
        'company' => 'Tencent Inc'
    ],
    [
        'name' => 'Taylor',
        'email' => 'taylor@laravel.com',
        'company' => 'Laravel Inc'
    ],
];

$lookup = [
    'JellyBool' => 'jellybool@outlook.com',
    'perfecbook' => 'perfectbook@example.com',
    'Taylor' => 'taylor@laravel.com'
];

$emails = collect($employees)->pluck('email','name');

dd($emails);











