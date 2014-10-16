<?php

if(isset($_POST['data'])){
    echo $input = nl2br($_POST['data']);
}

///*
// * array functions
// */
//$arrayVar = ['test1' => 'hej', 'test2' => 'med', 'test3' => 'dig', 'test4' => ',', 'test5' => 'thai', 'test6' => '!'];
//$arrayVar2 = ['lort1' => 'leg', 'lort2' => 'med', 'lort3' => 'mig'];
//
//echo sizeof($arrayVar).'<br>';
//
//print_r($arrayVar); echo '<br>';
//print_r(array_values($arrayVar)); echo '<br>';
//
////sort($arrayVar);
////print_r($arrayVar); echo '<br>';
//
//print_r(array_reverse($arrayVar)); echo '<br>';
//
//print_r(array_merge($arrayVar, $arrayVar2)); echo '<br>';
//
//echo $arrayVar[array_search('hej', $arrayVar)]; echo '<br>'; //weird
//
////
//
//$arrayVar3 = [45,67,45,48];
//
//$arrayVar3 = array_walk($arrayVar3, function(&$val, &$key){
//    $val += 100;
//});
//
//print_r($arrayVar3); echo '<br>';
//
////
//
//function reduceBy10(&$valooo, $key) {
//    $valooo += 100;
//}
//
//$data = array(10,20,30,40);
//array_walk($data, function (&$valooo, $key) {
//    $valooo += 100;
//});
//print_r($data);

///**
// * code kata string adder
// */
//$str0 = "35,36\n37,38,1,50";
//$str1 = '45';
//$str2 = '36,37,-3,35,66,-15,-16';
//
//function add($string){
//    $sumPlus = 0;
//    $sumMinus = [];
//
//    $replace = [',', '\n'];
//
//    $newStr = str_replace($replace, ' ', $string);
//
//    $array = explode(' ', $newStr);
//
//    foreach($array as $a){
//
//        if( $a < 0){
//            $sumMinus[] = $a;
//        }
//        if( $a >= 0){
//            $sumPlus += $a;
//        }
//    }
//
//    if($sumMinus === null) {
//        return $sumPlus;
//    } else {
//        $message = 'negatives not allowed: ';
//        foreach($sumMinus as $s){
//            $message .= $s;
//        }
//        throw new Exception($message);
//    }
//}
//
//print_r(get_defined_vars());
//echo '<br>';
//print_r(add($str2));
?>
<hr>
<form action="" method="post">
    <textarea name="data" id="" cols="30" rows="10"><?php echo $input; ?></textarea><br/>
    <button type="submit">Gem</button>
</form>
