<?php
require_once 'Tag.php';
class Option extends Tag
{

    public function __construct(){
        parent::__construct('option');
        return $this;
    }

    public function is_selected(){
        if(isset($_REQUEST['list'])){
            if ($this->getText()==$_REQUEST['list']){
                $this->setSelected();
            }
            else{
                $this->removeAttr('selected');
            }
        }
    }

    public function setSelected(){
        $this->setAttr('selected');
        return $this;
    }

    public function __toString(){
        return $this->show();
    }

}
