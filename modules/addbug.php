<?php
if (strpos($message, "/addbug") === 0){
if ($userId == '5126174674'){
$bug = substr($message, 8);
file_put_contents('bugdb.txt', $bug . PHP_EOL, FILE_APPEND);
sendMessage($chatId, "<b>[✦] BIN: $bug%0A[✦] RESPONSE: $bug will be identified as a bug bin from now.</b>", $message_id);
}
}

if (strpos($message, "/showbug") === 0){
$eol = file_get_contents('bugdb.txt');
sendMessage($chatId, "<b>[✦] BUG BIN LIST IN MY DB: %0A$eol</b>", $message_id);
}

