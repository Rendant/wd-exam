<?php
require_once 'Link.php';

echo (new Link())->setAttr('href', '1.php')->setText('первая')->show(), '<br>';
echo (new Link())->setAttr('href', '2.php')->setText('вторая')->show(), '<br>';
echo (new Link())->setAttr('href', '3.php')->setText('третья')->show(), '<br>';
echo (new Link())->setAttr('href', '4.php')->setText('четвертая')->show(), '<br>';
echo (new Link())->setAttr('href', '5.php')->setText('патая')->show(), '<br>';