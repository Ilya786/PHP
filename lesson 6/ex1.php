<?php
$data = $_POST;
$br ='<br/>';
if ($data["arg1"] && $data["arg2"]){
    echo mathOperation($data["arg1"],$data["arg2"],$data["operation"]);
}
function mathOperation($arg1, $arg2, $operation){
    if ($operation === 'sum'){
        return $arg1 + $arg2;
    }elseif ($operation === 'dif'){
        return $arg1 - $arg2;
    }elseif ($operation === 'mul'){
        return $arg1 * $arg2;
    }elseif ($operation === 'div'){
        if ($arg2 == 0 ){
            return 'На ноль делить нельзя!';
        } else{
            return $arg1 / $arg2;
        }
    }else{
        return 'Неопределенная операция';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="ex1.php" method="post">
    <input type="text" name="arg1">
    <input type="text" name="arg2">
    <select name="operation" id="operation">
        <option value="sum" name="mathOperation">Сложение</option>
        <option value="dif" name="mathOperation">Вычетание</option>
        <option value="mul" name="mathOperation">Умножение</option>
        <option value="div" name="mathOperation">Деление</option>
    </select>
    <input type="submit" value="Вычеслить">
</form>
</body>
</html>
