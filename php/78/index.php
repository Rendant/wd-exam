<?php
require_once 'Form.php';
require_once 'Input.php';
require_once 'Submit.php';
require_once 'Password.php';
require_once 'Hidden.php';
require_once 'TextArea.php';
require_once 'Checkbox.php';
require_once 'Radio.php';
require_once 'Select.php';
	$form = (new Form)->setAttrs(['action' => '', 'met
		hod' => 'GET']);

 	echo $form->open();
		echo (new Input)->setAttr('name', 'test');

		echo (new Select)->setAttr('name', 'list')
			->add( (new Option())->setText('item1') )
			->add( (new Option())->setText('item2') )
			->add( (new Option())->setText('item3') )
			->show();

		echo new Submit;
	echo $form->close();
?>
