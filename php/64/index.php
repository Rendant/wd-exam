<?php
require_once 'tag.php';

$tag = new Tag('input');

echo $tag->setAttr('name', 'name1')->open();

echo (new Tag('input'))->setAttr('name', 'name2')->open();
?>
