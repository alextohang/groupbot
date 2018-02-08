<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '519678686:AAGwrFneDcDIrlfNeACdoqnhXaPxEDNgEh0';
$bot_username = 'sumatransbuttlerbot';
$hook_url = 'https://alexgroupbot.herokuapp.com/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}