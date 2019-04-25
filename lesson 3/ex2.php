<?php
$i = 0;
$br = '</br>';
do{
    if ($i===0){
        echo $i . ' - это ноль' . $br;
    }elseif ($i%2===0){
        echo $i . ' - это четное число' . $br;
    }elseif ($i%2===1){
        echo $i . ' - это не четное число' . $br;
    }
    $i++;
} while($i<11);