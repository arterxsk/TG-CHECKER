<?php
$botToken = "6290784235:AAGNeaawgHPjO8JOjmlPmdyaWpLyo8Baa4k"; // Enter ur bot token
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$lastname = $update["message"]["from"]["last_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];
$t = 'Premium';
$k = 'Premium';
$f = 'Free';
$z = 'Free';
$sat = '';
$botby = '@ARTERXSK';
$pre = file_get_contents('pre.txt');
$pre = explode("\n", $pre);
if (in_array($userId, $pre)) {
  $usernam = ''.$username.'%0A<bPremium User</b>';
  $stat = $t;
  $statz = $k;
  }
else {
$usernam = ''.$username.'%0A Free User';
  $stat = $f;
  $statz = $z;
}


?>