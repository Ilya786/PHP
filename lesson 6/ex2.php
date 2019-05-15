<?php
$data = $_POST;
$br ='<br/>';
if (isset($data["arg1"]) && isset( $data["arg2"])){
    if ($data["sum"]){
        echo mathOperation($data["arg1"],$data["arg2"],'sum');
    }if ($data["dif"]){
        echo mathOperation($data["arg1"],$data["arg2"],'dif');
    }if ($data["mul"]){
            echo mathOperation($data["arg1"],$data["arg2"],'mul');

    }if ($data["div"]){
        if ($data['arg2'] == 0 ){
            echo 'На ноль делить нельзя!';
        } else{
            echo 1;
            echo mathOperation($data["arg1"],$data["arg2"],'div');
        }
    }
}
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
<form action="ex2.php" method="post">
    <input type="text" name="arg1">
    <input type="text" name="arg2">
    <input type="submit" value="Сложить" name="sum">
    <input type="submit" value="Вычесть" name="dif">
    <input type="submit" value="Умножить" name="mul">
    <input type="submit" value="Разделить" name="div">
</form>
</body>
</html>
