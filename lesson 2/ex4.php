<?php
$a = 90;
$b = 53;
$br ='<br/>';
function mathOperation($arg1, $arg2, $operation){
    if ($operation === 'sum'){
        return $arg1 + $arg2;
    }elseif ($operation === 'dif'){
        return $arg1 - $arg2;
    }elseif ($operation === 'mul'){
        return $arg1 * $arg2;
    }elseif ($operation === 'div'){
        return $arg1 / $arg2;
    }else{
        return 'Неопределенная операция';
    }
}

echo mathOperation($a,$b,'sum') . $br;
echo mathOperation($a,$b,'dif') . $br;
echo mathOperation($a,$b,'mul') . $br;
echo mathOperation($a,$b,'div') . $br;
echo mathOperation($a,$b,'di') . $br;