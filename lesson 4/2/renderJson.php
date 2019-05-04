<?php
$arrMax = scandir('images/min');
$br = '<br/>';
$jsonArr = [];
foreach ($arrMax as $key => $value) {
    if (!($key == 0 || $key == 1)) {
        $newArr = [];
        $newArr['imageSrc'] = $value;
        $newArr['bigImageSrc'] = $value;
        $newArr['alt'] = 'Картинка';
        array_push($jsonArr, $newArr);
    }
}
$jsonText = json_encode($jsonArr);
$file = fopen('image.json', 'w');
fputs($file, $jsonText);
