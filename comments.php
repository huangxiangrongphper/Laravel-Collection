<?php
require __DIR__ . '/vendor/autoload.php';

$messages = [
    'Should be working now for all Providers.',
    'If you see one where spaces are in the title let me know.',
    'But there should not have blank in the key of config or .env file.'
];

/*$comment = '- '.$messages[0];

foreach (array_slice($messages,1) as $message) {
    $comment .= "\n- {$message}";
}*/

$comment = collect($messages)->map(function ($message){
    return "- {$message}";
})->implode("\n");


dd($comment);
