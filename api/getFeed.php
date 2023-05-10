<?php
$response = file_get_contents('https://instagram.com/[username]');
$startFlag = 'window._sharedData = ';
$startPos = strpos($response, $startFlag);
$json_response = substr($response, ($startPos + strlen($startFlag)));
$endPos = strpos($json_response, ";</script>");
$json_response = substr($json_response, 0, $endPos);
echo $json_response;
?>
