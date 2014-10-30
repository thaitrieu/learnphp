<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 30-10-2014
 * Time: 10:27
 */
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style>
		p {
			width: 300px;
		}
	</style>
</head>
<body>
	<h1>Dette er en overskrift</h1>
	<p class="foo">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

	<script>
		$(document).ready(function(){
			$('.foo').mouseover(function(){
				alert('hello world');
			});
		});
	</script>
</body>
</html>