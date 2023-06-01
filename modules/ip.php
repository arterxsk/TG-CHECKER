<?php
$time_start = microtime(true);
if ((strpos($message, "/ip") === 0) || (strpos($message, "!ip") === 0) || (strpos($message, ".ip") === 0)) {
	sendaction($chatId, typing);
	$ip = substr($message, 4);

	$sendmes = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=".$chatId."&text=<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A━━━━━━━━━━━━━%0A[✦] IP: ".$ip."%0A[✦] STATUS: CHECKING IP,PLEASE WAIT%0A━━━━━━━━━━━━━</b>&reply_to_message_id=".$message_id."&parse_mode=HTML";

	$sent = json_decode(file_get_contents($sendmes), 1);
	$mes_id = $sent['result']['message_id'];
	$gip = file_get_contents('https://scamalytics.com/ip/'.$ip.'');

	$msg = trim(strip_tags(getStr($gip, '   <div style="border-bottom: 1px solid #CCCCCC"><b>IP Fraud Risk API</b></div>
        <pre style="margin: 0; text-transform: lowercase;">', '</pre>
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

	editMessage($chatId, "<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A━━━━━━━━━━━━━%0A[✦] TOOL: IP CHK%0A[✦] IP: $ip%0A[✦] RAW DETAILS: <code>$msg</code>%0A━━━━━━━━━━━━━%0A[✦] ISP: $isp%0A[✦] ASN: $asn%0A[✦] COUNTRY: $country - $countrycode%0A[✦] Region: $region%0A[✦] CITY: $city%0A[✦] POSTAL CODE: $pcode%0A━━━━━━━━━━━━━%0A[✦] TIME TAKEN: $execution_time's%0A[✦] Checked By: @$username%0A[✦] UserID: $userId%0A[✦] Premium Activated: $stat%0A</b>", $mes_id);
}