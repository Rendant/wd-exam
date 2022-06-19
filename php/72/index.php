<?php
require_once 'Form.php';
require_once 'Input.php';
$n1 = 0;
$n2 = 0;
$n3 = 0;
$n4 = 0;
$n5 = 0;

$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);

echo $form->open();
echo (new Input)->setAttr('name', 'n1');
echo (new Input)->setAttr('name', 'n2');
echo (new Input)->setAttr('name', 'n3');
echo (new Input)->setAttr('name', 'n4');
echo (new Input)->setAttr('name', 'n5');
echo (new Input)->setAttr('type', 'submit');
echo $form->close();

if(isset($_GET["n1"])){
    $n1 = $_GET["n1"];
}
if(isset($_GET["n2"])){
    $n2 = $_GET["n2"];
}
if(isset($_GET["n3"])){
    $n3 = $_GET["n3"];
}
if(isset($_GET["n4"])){
    $n4 = $_GET["n4"];
}
if(isset($_GET["n5"])){
    $n5 = $_GET["n5"];
}
$sum = $n1 + $n2 + $n3 + $n4 + $n5;
if(isset($sum)){
    echo $sum;
}
?>