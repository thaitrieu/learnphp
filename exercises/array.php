<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 17-10-2014
 * Time: 13:00
 */
$color = ['white', 'green', 'red', 'blue', 'black'];

$string = "The memory of that scene for me is like a frame of film forever frozen at that moment:
the red carpet, the green lawn, the white house, the leaden sky.
The new president and his first lady. - Richard M. Nixon";

foreach($color as $c){
    $string = str_replace($c,$c,$string);
//    echo $c.'<br/>';
}

//echo $string;

//foreach($color as $c){
//    echo '<li>'.$c.'</li>';
//}

$countries = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
asort($countries);
foreach($countries as $c => $h){
    echo "The capital of $c is $h<br/>";
}

$i = [1,2,3,4,5];

unset($i[rand(0,4)]);
$i = array_values($i);

print_r($i);

$x= ['test1' => 'white', 'test2' => 'black', 'test3' => 'blue', 'test4' => 'green', 'test5' => 'red'];
echo "<br/>";

$city = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";
$test = 999;

$location_vars = ["city", "state"];

$result = compact("event", "nothing_here", $location_vars, 'test');

print_r($result);

$jsonString = '{"Title": "The Cuckoos Calling",
      "Author": "Robert Galbraith",
      "Detail":
      {
        "Publisher": "Little Brown"
       }
       }';
$jsonArray = json_decode($jsonString, true);

function spitItOut($valuees, $keys){
    echo "$keys : $valuees <br/>";
}

array_walk_recursive($jsonArray, 'spitItOut');

$y = [1,2,3,4,5];

array_splice($y, rand(0,4), 0, '$');

print_r($y);