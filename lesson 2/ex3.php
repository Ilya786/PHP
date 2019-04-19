<?php
$a = 6;
$b = 10;
$br ='<br/>';
function sum($arg1, $arg2){
    return $arg1 + $arg2;
}
function dif($arg1, $arg2){
    return $arg1 - $arg2;
}
function mul($arg1, $arg2){
    return $arg1 * $arg2;
}
function div($arg1, $arg2){
    return $arg1 / $arg2;
}

echo sum($a,$b) . $br;
echo dif($a,$b) . $br;
echo mul($a,$b) . $br;
echo div($a,$b) . $br;