<?php
require_once 'tag.php';

echo (new Tag('input'))->addClass('eee')->open();

echo (new Tag('input'))
    ->setAttr('class', 'eee bbb')
    ->addClass('kkk')->open();

echo (new Tag('input'))
    ->setAttr('class', 'eee bbb')
    ->addClass('eee')
    ->open();

echo (new Tag('input'))
    ->addClass('eee')
    ->addClass('bbb')
    ->addClass('eee')
    ->open();

echo (new Tag('input'))
    ->setAttr('class', 'eee zzz kkk') // добавим 3 класса
    ->removeClass('zzz') // удалим класс 'zzz'
    ->open(); // выведет <input class="eee kkk">
?>
