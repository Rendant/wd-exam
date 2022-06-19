<?php
require_once 'Tag.php';
class Textarea extends Tag
{

    public function __construct()
    {
        parent::__construct('textarea');
    }

    public function open()
    {
        $TextName = $this->getAttr('name');

        if ($TextName) {
            if (isset($_REQUEST[$TextName])) {
                $value = $_REQUEST[$TextName];
                $this->setAttr('value', $value);
            }
        }

        return parent::open();

    }
}
