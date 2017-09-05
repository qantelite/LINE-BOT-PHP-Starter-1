<?php
$access_token = 'JNaL2+KIrmSVy5Ii7ClQ2X3gABMeGActnQEdahqov/QTVUsh4bRHYdMqf3nCXLtILBYfVqlZ0RP+d9v8n8LavySrLSQV8JcmexDikV0mAxJHpkdHdO9csUVUeoRWuDKpijdS6ZfAGmA8O7Sch3CNFwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;