<?php
$u=$_REQUEST["username"];
$p=$_REQUEST["pass"];
$title=$_REQUEST["title"];
$url=$_REQUEST["url"];

$message="Reading '".$title."'  ".file_get_contents("http://tinyurl.com/api-create.php?url=".$url);
$host = "http://twitter.com/statuses/update.xml?status=".urlencode(stripslashes(urldecode($message)));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $host);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, "$u:$p");
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, 1);
$result = curl_exec($ch);
$resultArray = curl_getinfo($ch);
curl_close($ch);

$answer="ok";
echo "answer=".$answer;
?>