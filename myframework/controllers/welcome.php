<?php

class welcome extends AppController{

    public function __construct($parent){

        //var_dump($parent);

    }

    public function myMethod(){

        $nav = ["/welcome/myMethod"=>"Home", "/about/myMethod"=>"About", "/contact/myMethod"=>"Contact Us"];

        $this->getView("header",array("pagename"=>"welcome"));

        $this->getView("navigation", $nav);

        $this->getView("welcome");

    }

}

?>