<?php

// @OGHAB_TM

// روی ادرس این فایل کرون جاب یک دقیقه ای ست کنید
if (!file_exists('MadelineProto.log')) {
    unlink('MadelineProto.log');
}
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include ('jdf.php');
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('oghab.madeline');
$MadelineProto->start();

$day_number = jdate('j');
$month_number = jdate('n');
$year_number = jdate('y');
$day_name = jdate('l');
$time = date("H:i");

$MadelineProto->account->updateProfile(['about' => "🖤 TIME : $time :)"]);

// @OGHAB_TM