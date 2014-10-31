<?php

$url = "http://localhost/learnphp/kundeklub/curl_submit.php";

$ch = curl_init();

if(!$ch)
{
	die('Failed to create curl object');
}

curl_setopt_array($ch, [
	CURLOPT_URL => $url,
	CURLOPT_POST => true
]);

$post_data = "name=Thai&age=28";

curl_setopt_array($ch, [
	CURLOPT_POSTFIELDS => ["name" => "trieu", "age" => 28],
	CURLOPT_RETURNTRANSFER => true
]);

$output = curl_exec($ch);

$info = curl_getinfo($ch);

if(!$output){
	echo "cURL Error: " - curl_error($ch);
}

curl_close($ch);

echo 'Took ' . $info['total_time'] . ' seconds for url ' . $info['url'];