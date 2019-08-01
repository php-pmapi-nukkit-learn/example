<?php

// Создание изображения
$img = imagecreatetruecolor(800, 525);

// Создание цвета фона
$bgColor = imagecolorallocate($img, 32, 64, 85);
// и его заливка. Заливаем от указанных координат
imagefill($img, 0, 0, $bgColor);

imagepng($img, 'result.png');

