<?php

class about extends AppController{

    public function __construct($parent){

        //var_dump($parent);

    }

    public function myMethod(){

        $nav = ["/welcome/myMethod"=>"Home", "/about/myMethod"=>"About", "/contact/myMethod"=>"Contact Us"];

        $this->getView("header",array("pagename"=>"about"));

        $this->getView("navigation", $nav);

        $this->getView("about");

    }

}

?>