<?php
$title = 'Hi';
$subtitle = 'Bob';
$question = "what's your name?";
$year = getdate();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        footer {
        flex-shrink: 0;
        color: red;
            font-size: 30px;
        }
        .container {
            height: 95vh;
            display: flex;
            flex-direction: column;
        }
        .wrapper{
            flex: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <h1><?=$title?></h1>
        <h3><?=$subtitle?></h3>
        <h5><?=$question?></h5>
    </div>
    <footer><?=$year['year']?></footer>
</div>
</body>
</html>