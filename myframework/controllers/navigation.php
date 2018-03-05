<?php

class navigation extends AppController{

    public function __construct(){

        $nav = [0=>"Home", 1=>"About", 2=>"Contact Us"];

        $this->getView("navigation", $nav);

    }

}

?>