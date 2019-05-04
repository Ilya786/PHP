<?php
include('image.php');
$uploadDirMax = 'images/max/';
$uploadDirMin = 'images/min/';
$append = $_FILES['userFile']['name'];
$uploadFileMax = "$uploadDirMax$append";
$uploadFileMin = "$uploadDirMin$append";
if (($_FILES['userFile']['type'] == 'image/gif' ||
        $_FILES['userFile']['type'] == 'image/jpeg' ||
        $_FILES['userFile']['type'] == 'image/png') &&
    ($_FILES['userFile']['size'] != 0 and $_FILES['userFile']['size'] <= 1024000)) {
    if (move_uploaded_file($_FILES['userFile']['tmp_name'], $uploadFileMax)) {
        $image = new SimpleImage();
        $image->load($uploadFileMax);
        $image->resize(300, 150);
        $image->save($uploadFileMin);
    }
}
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
    <img src="images/min/1.jpg" data-full_image_url="images/max/10.jpg" alt="Картинка1">
    <img src="images/min/2.jpg" data-full_image_url="images/max/2.jpg" alt="Картинка2">
    <img src="images/min/3.jpg" data-full_image_url="images/max/3.jpg" alt="Картинка3">
    <img src="images/min/4.jpg" data-full_image_url="images/max/4.jpg" alt="Картинка4">
    <form name="upload" action="index.php" method="POST" ENCTYPE="multipart/form-data">
        Выберите файл для загрузки:
        <input type="file" name="userFile" value="file">
        <input type="submit" name="upload" value="Загрузить">
    </form>
</div>
<!--
<div class="galleryWrapper">
  <div class="galleryWrapper__screen"></div>
  <img class="galleryWrapper__close" src="images/gallery/close.png" alt="">
  <img class="galleryWrapper__image" src="images/max/1.jpg" alt="">
</div>
-->
<script src="js.js"></script>
</body>
</html>
