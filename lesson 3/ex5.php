<?php
function replace($str){
    $splittext = preg_split ('//u', $str);
    foreach ($splittext as $key => $value){
        if ($value === ' '){
            $splittext[$key] = '_';
        }
    }
    $text = implode($splittext);
    return $text;
}

$str = 'lkeuhg ;kufdhgladf;jg kljhgalkgj kljdfghsldkgj  ;dfgjfd;g';
echo replace($str);