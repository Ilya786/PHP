<?php
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <link rel="stylesheet" href="styel.css">
</head>
<body>
<div class="galleryPreviewsContainer">
    <?php foreach ($result as $img):?>
    <img src="<?=$img['minSrc']?>" data-id="<?=$img['id']?>">
    <?php endforeach;?>
</div>
</body>
</html>
