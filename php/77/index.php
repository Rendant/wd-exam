<?php
require_once 'Form.php';
require_once 'Input.php';
require_once 'Submit.php';
require_once 'Password.php';
require_once 'Hidden.php';
require_once 'TextArea.php';
require_once 'Checkbox.php';
require_once 'Radio.php';
$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);

echo $form->open();
echo (new Radio)->setAttr('name', 'radio1');
echo (new Radio)->setAttr('name', 'radio2')->setAttr('value', '2');
echo (new Input)->setAttr('name', 'user');
echo new Submit;
echo $form->close();
?>
