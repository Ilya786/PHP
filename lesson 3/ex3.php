<?php
$arr = [
    'Московская область'=>['Москва','Зеленоград','Клин'],
    'Ленинградская область'=>['Санкт-Петербург','Всеволожск','Павловск','Кронштадт'],
    'Рязанская область'=>['Рязань',],
];
$br = '</br>';
foreach ($arr as $key => $value){
    echo $key . ':' . $br;
    if (is_array($value)){
        foreach ($value as $city) {
            if ($city == end($value)){
                echo $city;
            } else{
                echo $city . ', ';
            }
        };
        echo $br;
    }
}