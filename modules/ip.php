<?php
$time_start = microtime(true);
if ((strpos($message, "/ip") === 0)||(strpos($message, "!ip") === 0)||(strpos($message, ".ip") === 0)){
  
      $sendmes = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=読み込み中...&reply_to_message_id=".$message_id."&parse_mode=HTML";
    $sent = json_decode(file_get_contents($sendmes) ,1);
    $mes_id = $sent['result']['message_id'];
  editMessage($chatId,'.',$mes_id);
  editMessage($chatId,'..',$mes_id);
  editMessage($chatId,'...',$mes_id);
  editMessage($chatId,'.',$mes_id);
  editMessage($chatId,'..',$mes_id);
  editMessage($chatId,'...',$mes_id);
    $_array = preg_replace("/[^0-9.]/", "",$message);
    if(empty($_array)){
      editMessage($chatId, 'You don’t provide anything.',$mes_id);
      exit();
    }
    $array = explode("\n", $_array);
    editMessage($chatId,'Success, parsing started.',$mes_id);
editMessage($chatId, "Sending result...", $mes_id);
   $gip = file_get_contents('https://scamalytics.com/ip/'.$array[0].'');
      $msg = trim(strip_tags(getStr($gip,'   <div style="border-bottom: 1px solid #CCCCCC"><b>IP Fraud Risk API</b></div>
        <pre style="margin: 0; text-transform: lowercase;">','</pre>
        <div style="border-top: 1px solid #CCCCCC"><a href="/ip/api/pricing">Click here</a> for details of our <a href="/ip/api/pricing">free usage tier</a>, <a href="/ip/api/pricing">free trial</a>, and <a href="/ip/api/pricing">pricing information</a>.</div>')));


$isp = trim(strip_tags(getStr($gip, ' <tr>
            <th>ISP Name</th>', ' </tr>
        <tr>')));
	$asn = trim(strip_tags(getStr($gip, '  <tr>
            <th>ASN</th>', ' </tr>
        <tr>')));
	$country = trim(strip_tags(getStr($gip, '   </tr>
        <tr>
            <th>Country Name</th>', '   </tr>
        <tr>')));
	$countrycode = trim(strip_tags(getStr($gip, '  <tr>
            <th>Country Code</th>', '   </tr>
        <tr>')));
	$region = trim(strip_tags(getStr($gip, '  <tr>
            <th>Region</th>', '   </tr>
        <tr>')));
	$city = trim(strip_tags(getStr($gip, ' <tr>
            <th>City</th>', '   </tr>
        <tr>')));

	$pcode = trim(strip_tags(getStr($gip, '  <tr>
            <th>Postal Code</th>', '   </tr>
        <tr>')));
  $time_end = microtime(true);
  $execution_time = ($time_end - $time_start);
editMessage($chatId, "✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗲𝗰𝗸𝗲𝗿 !%0A%0A⌗ 𝘁𝗼𝗼𝗹: ip lookup%0A⌗ 𝗶𝗽: $array[0]%0A⌗ 𝗿𝗮𝘄 𝗱𝗲𝘁𝗮𝗶𝗹𝘀: <code>$msg</code>%0A⌗ 𝗶𝘀𝗽: $isp%0A⌗ 𝗮𝘀𝗻: $asn%0A⌗ 𝗰𝗼𝘂𝗻𝘁𝗿𝘆: $country • $countrycode%0A⌗ 𝗿𝗲𝗴𝗶𝗼𝗻: $region%0A⌗ 𝗰𝗶𝘁𝘆: $city%0A⌗ 𝗽𝗼𝘀𝘁𝗮𝗹 𝗰𝗼𝗱𝗲: $pcode%0A%0A⌗ 𝘁𝗶𝗺𝗲: $execution_time%0A⌗ 𝗰𝗵𝗲𝗰𝗸𝗲𝗱 𝗯𝘆: @$username%0A⌗ 𝘂𝘀𝗲𝗿𝗜𝗗: $userId%0A⌗ 𝘀𝘂𝗯𝗰𝗿𝗶𝗽𝘁𝗶𝗼𝗻: $stat%0A%0A𝗯𝗼𝘁 𝗯𝘆: @arterxsk", $mes_id);
}
?>


