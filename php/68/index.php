<?php
    require_once 'image.php';

    echo (new Image())->setAttr('src', 'hololive keychain.jpg')
        ->setAttr('width', '300')
        ->setAttr('height', '200');