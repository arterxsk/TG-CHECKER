<?php
$time_start = microtime(true);
if ((strpos($message, "/iban") === 0)||(strpos($message, "!iban") === 0)||(strpos($message, ".iban") === 0)){
  sendaction($chatId, typing);
$iban = substr($message, 6);
  
     $result2 = file_get_contents('https://openiban.com/validate/'.$iban.'?getBIC=true&validateBankCode=true');
            $bankcode1 = capture($result2, '"bankCode": "', '"');
            $bankname = capture($result2, '"name": "', '"');
            $zip = capture($result2, '"zip": "', '"');
            $city = capture($result2, '"city": "', '"');
            $bic = capture($result2, '"bic": "', '"');

if(strpos($result2, 'valid": true')){
  $ib = 'VALID IBAN ✅';
}
if(strpos($result2, 'valid": false')) {
  $ib = 'INVALID IBAN ❌';
}
$msg = trim(strip_tags(getStr($result2,'{
  "valid": false,
  "messages": [
    "','".],')));
  
  $time_end = microtime(true);
  $execution_time = ($time_end - $time_start);
  
sendMessage($chatId, "<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A━━━━━━━━━━━━━%0A[✦] TOOL: IBAN CHK%0A[✦] IBAN: <code>$iban</code>%0A[✦] STATUS: $ib%0A[✦] MSG: $msg%0A[✦] BANK: $bankname%0A[✦]BANK CODE: $bankcode1%0A[✦]BIC: $bic[✦]CITY: $city%0A[✦]ZIP CODE: $zip%0A━━━━━━━━━━━━━%0A[✦] TIME TAKEN: $execution_time's%0A[✦] Checked By: @$username%0A[✦] UserID: $userId%0A[✦] Premium Activated: $stat%0A</b>", $message_id);
}

