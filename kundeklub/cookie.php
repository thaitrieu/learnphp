<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 03-11-2014
 * Time: 10:00
 */
function get_url($url)
{
	$ch = curl_init();
	define("HOME", dirname(__FILE__));

	if(!$ch) {
		die('Failed to create curl object');
	}

	$timeout = 5;

	curl_setopt_array($ch, [
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_CONNECTTIMEOUT => $timeout,
		CURLOPT_COOKIEFILE => HOME . "cookie.txt",
		CURLOPT_COOKIEJAR => HOME . "cookie.txt"
	]);

	$data = curl_exec($ch);

	curl_close($ch);

	return $data;
}

echo get_url("http://www.google.com");