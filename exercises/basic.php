<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 17-10-2014
 * Time: 08:51
 */
echo $_SERVER['HTTP_USER_AGENT']."<br/>";

$browser = get_browser(null, true);
print_r($browser);
echo '<br/>';

echo __FILE__.'<br/>';

$filename = basename($_SERVER['PHP_SELF']);
echo $filename.'<br/>';
print_r(glob('../*.php')) ;
echo '<br/>';

$url = 'http://www.w3resource.com/php-exercises/php-basic-exercises.php';
$scheme = strstr($url, ':', true);
$domain = strstr(strstr($url, '/php', true), 'www');
$path = strstr($url, '/php');
$url = parse_url($url);
print_r($url);

echo '<br/>';
$string = 'Hej mit navn er Thai';
$string = preg_replace('/(\b[a-z])/i', '<span style="color:red">\1</span>', $string);
echo $string;

if(isset($_SERVER['HTTPS'])){
    echo 'HTTPS';
} else echo 'HTTP';


//function redirect($url, $statusCode = 303){
//    header('Location: ' . $url, true, $statusCode);
//    die();
//}
//redirect('//jetraining.dk/cc');

$email = 'thai@outlook.dk';
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));

$a = 1000;
$b = 2000;
$c = 3000;

echo "<table><tr><td>a: </td><td>$a</td></tr><tr><td>b: </td><td>$b</td></tr><tr><td>c: </td><td>$c</td></tr></table><br/>";

//$code = file('http://www.example.com');
//
//foreach($code as $c1 => $c2){
//    echo htmlspecialchars($c2) . "<br/>";
//}

$file = filemtime("../index.php");
echo date("d/m/y h:i", $file).'<br/><br/>';

$textfile = file('text.txt');

$count = 0;
foreach($textfile as $t){
    $count++;
}
echo $count;