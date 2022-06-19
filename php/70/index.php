<?php
require_once 'HtmlList.php';
$list = new HtmlList('ul');

echo $list
    ->addItem((new ListItem())->setText('item1'))
    ->addItem((new ListItem())->setText('item2'))
    ->addItem((new ListItem())->setText('item3'));

$ul = new Ul;
echo $ul
    ->addItem( (new ListItem())->setText('item1') )
    ->addItem( (new ListItem())->setText('item2') )
    ->addItem( (new ListItem())->setText('item3') );

$ol = new Ol;
echo $ol
    ->addItem( (new ListItem())->setText('item1') )
    ->addItem( (new ListItem())->setText('item2') )
    ->addItem( (new ListItem())->setText('item3') );
?>

