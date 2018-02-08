#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '519678686:AAFXrrtVhoTza7YDBnbmVri5DTrHRY9k5RQ';
$bot_username = 'sumatransbuttlerbot';
$mysql_credentials = [
   'host'     => 'localhost',
   'user'     => 'pamtechno99_alex',
   'password' => 'rahasiaalex',
   'database' => 'pamtechno99_bot',
];

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Enable MySQL
    $telegram->enableMySql($mysql_credentials);

    // Handle telegram getUpdates request
    $telegram->handleGetUpdates();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}