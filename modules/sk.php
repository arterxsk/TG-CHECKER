<?php
$time_start = microtime(true);
if ((strpos($message, "/sk") === 0)||(strpos($message, ".sk") === 0)||(strpos($message, "/sk") === 0)){
  $pro = file_get_contents('pre.txt');
	$pros = explode("\n", $pro);
  if (in_array($chatId, $pros)) {
$sec = substr($message, 4);
  file_put_contents('./tmp/sk.txt', $sec . PHP_EOL, FILE_APPEND);
          $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=読み込み中...&reply_to_message_id=".$message_id."&parse_mode=HTML";
    $sent = json_decode(file_get_contents($sendmes) ,1);
    $mes_id = $sent['result']['message_id'];
  editMessage($chatId,'.',$mes_id);
  editMessage($chatId,'..',$mes_id);
  editMessage($chatId,'...',$mes_id);
  editMessage($chatId,'.',$mes_id);
  editMessage($chatId,'..',$mes_id);
  editMessage($chatId,'...',$mes_id);
    $_array = preg_replace("/(^.|.$)(*SKIP)(*F)|(.)/", "*",$sec);
    if(empty($_array)){
      editMessage($chatId, 'You don’t provide anything.',$mes_id);
      exit();
    }
    $array = explode("\n", $_array);
    editMessage($chatId,'Success, parsing started.',$mes_id);
editMessage($chatId, "Sending result...", $mes_id); delMessage($chatId, $message_id);
    
  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5278540001668044&card[exp_month]=10&card[exp_year]=2024&card[cvc]=252");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$msg = Getstr($result,'"message": "','"');
  $sec = substr($message, 4);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/balance');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$result1 = curl_exec($ch);
$curr = Getstr($result1,'"currency": "','"');
  $balance = trim(strip_tags(getStr($result1,'{
  "object": "balance",
  "available": [
    {
      "amount":',',')));
$pending = trim(strip_tags(getStr($result1,'"livemode": true,
  "pending": [
    {
      "amount":',',')));
  $time_end = microtime(true);
  $execution_time = ($time_end - $time_start);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗲𝗰𝗸𝗲𝗿 !%0A%0A⌗ 𝗴𝗮𝘁𝗲: sk check%0A⌗ 𝗸𝗲𝘆: <code>$_array</code>%0A⌗ 𝘀𝘁𝗮𝘁𝘂𝘀: key expired !%0A⌗ 𝗿𝗲𝘀𝗽𝗼𝗻𝘀𝗲: <code>$msg</code>%0A%0A⌗ 𝘁𝗶𝗺𝗲: $execution_time's%0A⌗ 𝗰𝗵𝗲𝗰𝗸𝗲𝗱 𝗯𝘆: @$username%0A⌗ 𝘂𝘀𝗲𝗿𝗜𝗗: $userId%0A⌗ 𝘀𝘂𝗯𝗰𝗿𝗶𝗽𝘁𝗶𝗼𝗻: $stat%0A%0A%0A𝗯𝗼𝘁 𝗯𝘆: @arterxsk%0A", $mes_id);
}elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗲𝗰𝗸𝗲𝗿 !%0A%0A⌗ 𝗴𝗮𝘁𝗲: sk check%0A⌗ 𝗸𝗲𝘆: <code>$_array</code>%0A⌗ 𝘀𝘁𝗮𝘁𝘂𝘀: invalid stripe key !%0A⌗ 𝗿𝗲𝘀𝗽𝗼𝗻𝘀𝗲: <code>$msg</code>%0A%0A⌗ 𝘁𝗶𝗺𝗲: $execution_time's%0A⌗ 𝗰𝗵𝗲𝗰𝗸𝗲𝗱 𝗯𝘆: @$username%0A⌗ 𝘂𝘀𝗲𝗿𝗜𝗗: $userId%0A⌗ 𝘀𝘂𝗯𝗰𝗿𝗶𝗽𝘁𝗶𝗼𝗻: $stat%0A%0A%0A𝗯𝗼𝘁 𝗯𝘆: @arterxsk%0A", $mes_id);
}
elseif ((strpos($result, 'You did not provide an API key.')) || (strpos($result, 'You need to provide your API key in the Authorization header,'))){
sendMessage($chatId, "✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗲𝗰𝗸𝗲𝗿 !%0A%0A⌗ 𝗴𝗮𝘁𝗲: sk check%0A⌗ 𝗸𝗲𝘆: <code>$_array</code>%0A⌗ 𝘀𝘁𝗮𝘁𝘂𝘀: no sk provided !%0A⌗ 𝗿𝗲𝘀𝗽𝗼𝗻𝘀𝗲: <code>$msg</code>%0A%0A⌗ 𝘁𝗶𝗺𝗲: $execution_time's%0A⌗ 𝗰𝗵𝗲𝗰𝗸𝗲𝗱 𝗯𝘆: @$username%0A⌗ 𝘂𝘀𝗲𝗿𝗜𝗗: $userId%0A⌗ 𝘀𝘂𝗯𝗰𝗿𝗶𝗽𝘁𝗶𝗼𝗻: $stat%0A%0A%0A𝗯𝗼𝘁 𝗯𝘆: @arterxsk%0A", $mes_id);
}
elseif ((strpos($result, 'rate_limit')) || (strpos($result, 'rate_limit'))){
sendMessage($chatId, "✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗲𝗰𝗸𝗲𝗿 !%0A%0A⌗ 𝗴𝗮𝘁𝗲: sk check%0A⌗ 𝗸𝗲𝘆: <code>$_array</code>%0A⌗ 𝘀𝘁𝗮𝘁𝘂𝘀: rate limit !%0A⌗ 𝗿𝗲𝘀𝗽𝗼𝗻𝘀𝗲: <code>$msg</code>%0A⌗ 𝗰𝘂𝗿𝗿𝗲𝗻𝗰𝘆: $curr%0A⌗ 𝗯𝗮𝗹𝗮𝗻𝗰𝗲: $balance%0A⌗ 𝗽𝗲𝗻𝗱𝗶𝗻𝗴 𝗮𝗺𝗼𝘂𝗻𝘁: $pending%0A⌗ 𝗰𝗮𝗿𝗱 𝗽𝗿𝗼𝗰𝗲𝘀𝘀𝗲𝗱: $pending%0A%0A⌗ 𝘁𝗶𝗺𝗲: $execution_time's%0A⌗ 𝗰𝗵𝗲𝗰𝗸𝗲𝗱 𝗯𝘆: @$username%0A⌗ 𝘂𝘀𝗲𝗿𝗜𝗗: $userId%0A⌗ 𝘀𝘂𝗯𝗰𝗿𝗶𝗽𝘁𝗶𝗼𝗻: $stat%0A%0A%0A𝗯𝗼𝘁 𝗯𝘆: @arterxsk%0A", $mes_id);
}  
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗲𝗰𝗸𝗲𝗿 !%0A%0A⌗ 𝗴𝗮𝘁𝗲: sk check%0A⌗ 𝗸𝗲𝘆: <code>$_array</code>%0A⌗ 𝘀𝘁𝗮𝘁𝘂𝘀: test mode charges only !%0A⌗ 𝗿𝗲𝘀𝗽𝗼𝗻𝘀𝗲: <code>$msg</code>%0A%0A⌗ 𝘁𝗶𝗺𝗲: $execution_time's%0A⌗ 𝗰𝗵𝗲𝗰𝗸𝗲𝗱 𝗯𝘆: @$username%0A⌗ 𝘂𝘀𝗲𝗿𝗜𝗗: $userId%0A⌗ 𝘀𝘂𝗯𝗰𝗿𝗶𝗽𝘁𝗶𝗼𝗻: $stat%0A%0A%0A𝗯𝗼𝘁 𝗯𝘆: @arterxsk%0A", $mes_id);
}elseif ((strpos($result, 'card_not_supported')) || (strpos($result, 'card_declined'))){
sendMessage($chatId, "✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗲𝗰𝗸𝗲𝗿 !%0A%0A⌗ 𝗴𝗮𝘁𝗲: sk check%0A⌗ 𝗸𝗲𝘆: <code>$_array</code>%0A⌗ 𝘀𝘁𝗮𝘁𝘂𝘀: approved !%0A⌗ 𝗿𝗲𝘀𝗽𝗼𝗻𝘀𝗲: live key%0A⌗ 𝗰𝘂𝗿𝗿𝗲𝗻𝗰𝘆: $curr%0A⌗ 𝗯𝗮𝗹𝗮𝗻𝗰𝗲: $balance%0A⌗ 𝗽𝗲𝗻𝗱𝗶𝗻𝗴 𝗮𝗺𝗼𝘂𝗻𝘁: $pending%0A⌗ 𝗰𝗮𝗿𝗱 𝗽𝗿𝗼𝗰𝗲𝘀𝘀𝗲𝗱: $pending%0A%0A⌗ 𝘁𝗶𝗺𝗲: $execution_time's%0A⌗ 𝗰𝗵𝗲𝗰𝗸𝗲𝗱 𝗯𝘆: @$username%0A⌗ 𝘂𝘀𝗲𝗿𝗜𝗗: $userId%0A⌗ 𝘀𝘂𝗯𝗰𝗿𝗶𝗽𝘁𝗶𝗼𝗻: $stat%0A%0A%0A𝗯𝗼𝘁 𝗯𝘆: @arterxsk%0A", $mes_id);
delMessage($chatId, $mes_id);
}
} else {
		sendMessage($chatId, "<b>You are not authorized to use this command in here.You can use me in @arterxskchats chat or get authorization.</b>", $mes_id);
  }
}
?>