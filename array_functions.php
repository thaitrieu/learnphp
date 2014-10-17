<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 17-10-2014
 * Time: 08:44
 */

/*
 * array functions
 */
$arrayVar = ['test1' => 'hej', 'test2' => 'med', 'test3' => 'dig', 'test4' => ',', 'test5' => 'thai', 'test6' => '!'];
$arrayVar2 = ['lort1' => 'leg', 'lort2' => 'med', 'lort3' => 'mig'];

echo sizeof($arrayVar).'<br>';

print_r($arrayVar); echo '<br>';
print_r(array_values($arrayVar)); echo '<br>';

//sort($arrayVar);
//print_r($arrayVar); echo '<br>';

print_r(array_reverse($arrayVar)); echo '<br>';

print_r(array_merge($arrayVar, $arrayVar2)); echo '<br>';

echo $arrayVar[array_search('hej', $arrayVar)]; echo '<br>'; //weird

//

$arrayVar3 = [45,67,45,48];

$arrayVar3 = array_walk($arrayVar3, function(&$val, &$key){
    $val += 100;
});

print_r($arrayVar3); echo '<br>';

//

function reduceBy10(&$valooo, $key) {
    $valooo += 100;
}

$data = array(10,20,30,40);
array_walk($data, function (&$valooo, $key) {
    $valooo += 100;
});
print_r($data);

