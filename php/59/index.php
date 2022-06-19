<?php
require_once 'tag.php';

$img = new Tag('img', ['alt' => 'картинка']);

echo $img->open();


$header = new Tag('header');

echo $header->open().'header'.$header->close();
?>
