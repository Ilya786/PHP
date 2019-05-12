<?php
$mysqli = mysqli_connect('localhost','root','','gallery') or die("Ошибка " . mysqli_error($mysqli));

$query = mysqli_query($mysqli,"SELECT * FROM gallery.images");

$result = [];
while ($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
    var_dump($row);
    echo "<br/>";
}


mysqli_close($mysqli);