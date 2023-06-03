<?php
include "modules/include.php";
if ((strpos($message, "/start") === 0) || (strpos($message, "/start") ===
	0) || (strpos($message, "/start") === 0) || (strpos($message, "/start") ===
	0) || (strpos($message, ".status") === 0) || (strpos($message, "/status") ===
	0) || (strpos($message, ".start") === 0)) {
	sendMessage($chatId, "✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗲𝗰𝗸𝗲𝗿 !%0A%0AHello, $firstname. A little reminder that I’m still in the development process. Some of my commands might work or not and premium access. Check my commands by tapping the /cmds.%0A%0A⌗ 𝗳𝘂𝗹𝗹𝗻𝗮𝗺𝗲: $firstname $lastname%0A⌗ 𝘂𝘀𝗲𝗿𝗻𝗮𝗺𝗲: @$username%0A⌗ 𝘂𝘀𝗲𝗿𝗜𝗗: <code>$userId</code>%0A⌗ 𝗰𝗵𝗮𝘁𝗜𝗗: <code>$chatId</code>%0A⌗ 𝘀𝘂𝗯𝗰𝗿𝗶𝗽𝘁𝗶𝗼𝗻: $stat", $message_id);
}

if (strpos($message, "/pre") === 0) {
	if ($userId == '5126174674') {
		$uid = substr($message, 5);
		if (empty($uid)) {
			sendMessage($chatId, "provide user id !", $message_id);
		} else {
			fwrite(fopen('pre.txt', 'a'), $uid."\n");
			sendMessage($chatId, "$uid is now a premium user !", $message_id);

		}
	}
}

if ((strpos($message, "/status") === 0) || (strpos($message, "/status") === 0) || (strpos($message, "/status") === 0) || (strpos($message, "/status") === 0) || (strpos($message, "/status") === 0) || (strpos($message, "/status") === 0) || (strpos($message, ".status") === 0)) {
	sendMessage($chatId, "✦ 𝗮𝗿𝘁𝗲𝗿𝘅𝘀𝗸 𝗰𝗵𝗲𝗰𝗸𝗲𝗿 ! %0A%0A⌗ 𝗳𝘂𝗹𝗹𝗻𝗮𝗺𝗲: $firstname $lastname%0A⌗ 𝘂𝘀𝗲𝗿𝗻𝗮𝗺𝗲: @$username%0A⌗ 𝘂𝘀𝗲𝗿𝗜𝗗: <code>$userId</code>%0A⌗ 𝗰𝗵𝗮𝘁𝗜𝗗: <code>$chatId</code>%0⌗ 𝘀𝘂𝗯𝗰𝗿𝗶𝗽𝘁𝗶𝗼𝗻: $stat</b>", $message_id);
}

if ((strpos($message, "/cmds") === 0) || (strpos($message, "/cmds") === 0) || (strpos($message, "/cmds") === 0) || (strpos($message, "/cmds") === 0) || (strpos($message, "/cmds") === 0) || (strpos($message, "/cmds") === 0) || (strpos($message, ".cmds") === 0)) {
	sendMessage($chatId, "[✦] 𝗴𝗮𝘁𝗲𝘄𝗮𝘆 𝗰𝗼𝗺𝗺𝗮𝗻𝗱𝘀%0A%0A⌗ 𝘀𝗸 𝗰𝗵𝗲𝗰𝗸 - /sk%0A⌗ 𝗺𝗮𝘀𝘀 𝗰𝗵𝗲𝗰𝗸 - /mchk%0A⌗ 𝘁𝗼𝗼𝗹 𝗰𝗺𝗱𝘀 - /tools", $message_id);
}

if ((strpos($message, "/tools") === 0) || (strpos($message, "/tools") === 0) || (strpos($message, "/tools") === 0) || (strpos($message, "/tools") === 0) || (strpos($message, "/tools") === 0) || (strpos($message, "/tools") === 0) || (strpos($message, ".tools") === 0)) {
	sendMessage($chatId, "[✦] 𝘁𝗼𝗼𝗹 𝗰𝗼𝗺𝗺𝗮𝗻𝗱𝘀%0A%0A⌗ 𝗯𝗶𝗻 𝗹𝗼𝗼𝗸𝘂𝗽 - /bin%0A⌗ 𝗶𝗯𝗮𝗻 𝗹𝗼𝗼𝗸𝘂𝗽 - /iban%0A⌗ 𝗶𝗽 𝗹𝗼𝗼𝗸𝘂𝗽 - /ip%0A⌗ 𝗮𝗰𝗰𝗼𝘂𝗻𝘁 𝘀𝘁𝗮𝘁𝘂𝘀 - /status%0A", $message_id);

}
?>