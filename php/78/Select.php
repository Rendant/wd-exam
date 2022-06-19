<?php
require_once 'Tag.php';
require_once 'Option.php';
class Select extends Tag{
    private $options = [];
    public function __construct(){
        parent::__construct('select');
    }
    public function add(Option $option){
        $this->options[] = $option;
        return $this;
    }
    public function show()
    {
        $str = '';
        foreach ($this->options as $option) {
            $option->is_selected();
            $str .=  $option->show();
        }
        return $this->open() . $str . $this->close();
    }

}