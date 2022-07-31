<?php
include 'Telegram.php';  
//// Use the Telegram library in addition to your files
/////  https://github.com/Eleirbag89/TelegramBotPHP
$bot_token = '___TOKEN___';
$telegram = new Telegram($bot_token);
$text       = $telegram->Text();
$username   = $telegram->Username();
$name       = $telegram->FirstName();
$family     = $telegram->LastName();
$message_id = $telegram->MessageID();
$user_id    = $telegram->UserID();
$chat_id    = $telegram->ChatID(); 
$msgType    = $telegram->getUpdateType();
if($text == '/start'){
    $content = array('chat_id' => $chat_id, 'text' => $message_id, 'text' =>
    "🟢 Hello ".$name."\n\n🟣 CHAT ID : ".$chat_id."\n\n🔵 Username : @".$username);
    $telegram->sendMessage($content);
    die();
}else {
    $content = array('chat_id' => $chat_id, 'text' => $message_id, 'text' =>
    "🟢 Hello ".$name."\n\n🟣 CHAT ID : ".$chat_id."\n\n🔵 Username : @".$username);
    $telegram->sendMessage($content);
    die();
}
?>