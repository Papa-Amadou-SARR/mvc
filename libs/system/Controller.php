<?php
namespace libs\system;

class Controller{
protected $view;

    public function __construct(){
        $this->view = new View();   
    }
}


?>