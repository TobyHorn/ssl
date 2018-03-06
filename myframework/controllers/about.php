<?php

class about extends AppController{

    public function __construct($parent){

        //var_dump($parent);

    }

    public function getNav(){

        $nav = ["/welcome/myMethod"=>"Home", "/about/myMethod"=>"About", "/contact/myMethod"=>"Contact Us"];

        $this->getView("welcome", $nav);

    }

}

?>