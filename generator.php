<?php

define('FONT_FILE', './bicubik.ttf');

// Создание изображения
$img = imagecreatetruecolor(800, 525);

// Создание цвета фона
$bgColor = imagecolorallocate($img, 32, 64, 85);
// и его заливка. Заливаем от указанных координат
imagefill($img, 0, 0, $bgColor);

// Цвет текста и линий
$white = imagecolorallocate($img, 255, 255, 255);

// Верхняя линия
imagerectangle($img, 100, 80, 700, 90, $white);
imagefilltoborder($img, 101, 81, $white, $white);

// левая линия
imagerectangle($img, 100, 90, 110, 400, $white);
imagefilltoborder($img, 101, 91, $white, $white);

// нижняя линия
imagerectangle($img, 100, 400, 700, 410, $white);
imagefilltoborder($img, 101, 401, $white, $white);

// правая линия
imagerectangle($img, 690, 400, 700, 180, $white);
imagefilltoborder($img, 691, 201, $white, $white);

// PHP и подчеркивание
imagefttext($img, 100, 0, 240, 200, $white, FONT_FILE, 'PHP');
imagerectangle($img, 200, 220, 600, 230, $white);
imagefilltoborder($img, 201, 221, $white, $white);


imagefttext($img, 60, 0, 200, 330, $white, FONT_FILE, 'PHP GD2');

imagepng($img, 'result.png');

