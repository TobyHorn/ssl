<?php

class admin extends AppController{

    public function __construct($parent){

        if(@$_SESSION["isadmin"] && @$_SESSION["isadmin"]==1) {

        } else {

            header("Location:/home");

        }


    }

    public function index(){

        $nav = ["/home"=>"Home", "/about"=>"About", "/api/showApi"=>"API", "/shortenerC"=>"Shortener", "/home/contact"=>"Contact Us"];

        $this->getView("header",array("pagename"=>"admin"));

        $this->getView("navigation", $nav);

        echo "<p style='padding-top: 75px;'>This is an admin only area.</p>";

    }

}
?>