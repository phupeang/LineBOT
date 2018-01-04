<?php
$access_token = 'FbW8k9buidn0aaC/cZ0J2qY88oyqMQQl/XkXOobZlteg2qA28z5lIZGKwfJbzUvk3w5iBP6rqkhCtWMTU1FyRZXZ9gg399J5jO97d+SzcAugDreIkIDTPMrLkdvwfGA9tqVag0ggmGB+MwRWNBOLvgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;