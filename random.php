<?php
$img_array = glob('img/*.{gif,jpg,png,jpeg,webp,bmp}', GLOB_BRACE);
if (count($img_array) == 0) {
die('没找到图片文件。请先上传一些图片到 ' . dirname(FILE) . '/img/ 文件夹');
}
header('Content-Type: image/png');
echo file_get_contents($img_array[array_rand($img_array)]);
?>
