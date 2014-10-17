<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 17-10-2014
 * Time: 08:43
 */
/**
 * code kata string adder
 */
$str0 = "35,36\n37,38,1,50";
$str1 = '45';
$str2 = '36,37,-3,35,66,-15,-16';

function add($string){
    $sumPlus = 0;
    $sumMinus = [];

    $replace = [',', '\n'];

    $newStr = str_replace($replace, ' ', $string);

    $array = explode(' ', $newStr);

    foreach($array as $a){

        if( $a < 0){
            $sumMinus[] = $a;
        }
        if( $a >= 0){
            $sumPlus += $a;
        }
    }

    if($sumMinus === null) {
        return $sumPlus;
    } else {
        $message = 'negatives not allowed: ';
        foreach($sumMinus as $s){
            $message .= $s;
        }
        throw new Exception($message);
    }
}

print_r(get_defined_vars());
echo '<br>';
print_r(add($str2));