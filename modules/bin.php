<?php

$time_start = microtime(true);

if ((strpos($message, "/bin $bin") === 0)||(strpos($message, "/bin $bin") === 0)||(strpos($message, ".bin $bin") === 0)){
$bin = substr($message, 5);
$bin = substr("$bin", 0, 6);

      $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=読み込み中...&reply_to_message_id=".$message_id."&parse_mode=HTML";
    $sent = json_decode(file_get_contents($sendmes) ,1);
    $mes_id = $sent['result']['message_id'];
  editMessage($chatId,'.',$mes_id);
  editMessage($chatId,'..',$mes_id);
  editMessage($chatId,'...',$mes_id);
  editMessage($chatId,'.',$mes_id);
  editMessage($chatId,'..',$mes_id);
  editMessage($chatId,'...',$mes_id);
    $_array = preg_replace("/[^0-9.]/", "",$bin);
    if(empty($_array)){
      editMessage($chatId, 'You don’t provide anything.',$mes_id);
      exit();
    }
    $array = explode("\n", $_array);
    editMessage($chatId,'Success, parsing started.',$mes_id);
editMessage($chatId, "Sending result...", $mes_id);
  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'bin='.$bin.'');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = strtoupper(GetStr($fim, '"name":"', '"'));
$brand = strtoupper(GetStr($fim, '"brand":"', '"'));
$country = strtoupper(GetStr($fim, '"country":{"name":"', '"'));
$scheme = strtoupper(GetStr($fim, '"scheme":"', '"'));
$emoji = GetStr($fim, '"emoji":"', '"');
$type =strtoupper(GetStr($fim, '"type":"', '"'));
if(strpos($fim, '"type":"Credit"') !== false){
};
  $time_end = microtime(true);
  $execution_time = ($time_end - $time_start);
editMessage($chatId, "✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗲𝗰𝗸𝗲𝗿 !%0A%0A⌗ 𝘁𝗼𝗼𝗹: bin lookup%0A⌗ 𝘀𝘁𝗮𝘁𝘂𝘀: valid bin%0A⌗ 𝗯𝗶𝗻: <code>$bin</code>%0A⌗ 𝗰𝗼𝘂𝗻𝘁𝗿𝘆: $country $emoji%0A⌗ 𝗯𝗿𝗮𝗻𝗱: $brand%0A⌗ 𝗹𝗲𝘃𝗲𝗹: $scheme%0A⌗ 𝘁𝘆𝗽𝗲: $type%0A⌗ 𝗯𝗮𝗻𝗸: $bank%0A%0A⌗ 𝘁𝗶𝗺𝗲: $execution_time%0A⌗ 𝗰𝗵𝗲𝗰𝗸𝗲𝗱 𝗯𝘆: @$username%0A⌗ 𝘂𝘀𝗲𝗿𝗜𝗗: $userId%0A⌗ 𝘀𝘂𝗯𝗰𝗿𝗶𝗽𝘁𝗶𝗼𝗻: $stat%0A%0A𝗯𝗼𝘁 𝗯𝘆: @arterxsk", $mes_id);
} 
  ?>