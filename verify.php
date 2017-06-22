<?php
$access_token = 'RynT+GaU3EWMVXq4iZJ4nTzyOQBjWMU3+f7wad6QnNT9rsRRFosVGDdhIao0RPFAatrJ5e61xKyNDKxX3OFY4VFDHgkuP0JrTmMJQLmbDntcEGjxcH9bfLrEOv+0VSqw842F0cpftc11N6fAuAqzLAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
