<?php

$zed = $_POST['text'];

$zak = 'abcdefghijklmnopqrstuvwxyz1234567890_*&^%$#@!(":?><")';

$len = strlen($zak);

$code = '';

$r = mt_rand(1,128);

for($i=0;$i<$r;$i++)
{
$code .= $zak[mt_rand(0,$len-1)];
}

$convoid = $code;




$json = file_get_contents('http://api.program-o.com/v2/chatbot/?bot_id=10&say='.$zed.'&convo_id='.$convoid.'&format=json');

$arr = json_decode($json,true);

echo $arr['botsay'];

 ?>
