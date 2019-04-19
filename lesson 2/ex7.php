<?php

function getTime(){
    $now = getdate();
    $hoursText = '';
    $minutesText = '';
    if ($now['hours'] === 1 || $now['hours'] === 21){
        $hoursText = ' час';
    }elseif ($now['hours'] === 2 || $now['hours'] === 3 || $now['hours'] === 4 || $now['hours'] === 22){
        $hoursText = ' часа';
    }else{
        $hoursText = ' часов';
    }
    if ($now['minutes'] > 10 && $now['minutes'] < 14){
        $minutesText = ' минут';
    }else{
        switch ($now['minutes']%10){
            case 1: $minutesText = ' минута'; break;
            case 2:
            case 3:
            case 4: $minutesText = ' минуты'; break;
            default: $minutesText =' минут'; break;
        }
    }
    return $now['hours'] . $hoursText . ' ' . $now['minutes'] . $minutesText;
};
echo getTime();