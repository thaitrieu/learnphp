<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 17-10-2014
 * Time: 11:36
 */

//echo date("d/m/y");

//echo date("d/m/y", 1385925192);

//echo time();

$date = new DateTime('1997-12-23');



echo $date->format('d/m/y h:i').'<br/>';

$date->setDate(2005,04,05);
$date->setTime(12, 45);
$date->setTimezone(new DateTimeZone('Europe/Isle_of_Man'));

echo $date->format('d/m/y h:i').'<br/>';

echo $date->getTimestamp().'<br/>';

