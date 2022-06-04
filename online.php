<?php

// channel : @OGHAB_TM

date_default_timezone_set('Asia/Tehran');
if (!file_exists('madeline.php')) {
copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
$MadelineProto = new \danog\MadelineProto\API('oghab.madeline');
$MadelineProto->start();
$time = date('H:i');
try {
  // بیو
  $MadelineProto->account->updateProfile(['about' => "🖤 TIME : $time :)"]);
  // انلاین
  $MadelineProto->account->updateStatus(['offline' => false]);
  // نام
  $MadelineProto->account->updateProfile(['last_name' => "| $time"]);
} catch (\Exception $e) {
  echo "$e";
}
sleep(2);
if (file_exists('MadelineProto.log')) {
 unlink('MadelineProto.log');
}
echo 'Ok!';
