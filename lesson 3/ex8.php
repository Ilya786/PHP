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
           if (mb_substr($city, 0, 1, "UTF-8") === 'К'){
               if ($city == end($value)){
                   echo $city;
               } else{
                   echo $city . ', ';
               }
           }
        };
        echo $br;
    }
}