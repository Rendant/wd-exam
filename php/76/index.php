<?php
require_once 'Form.php';
require_once 'Input.php';
require_once 'Submit.php';
require_once 'Password.php';
require_once 'Hidden.php';
require_once 'TextArea.php';
$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);

echo $form->open();
echo (new Input)->setAttr('name', 'user');
echo (new Textarea)->setAttr('name', 'message')->show();
echo new Submit;

echo $form->close();
?>
