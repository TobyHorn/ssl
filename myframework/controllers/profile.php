<?php

class profile extends AppController{

    public function __construct($parent){

        if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) {

        } else {

            header("Location:/home");

        }


    }

    public function index(){

        $nav = ["/home"=>"Home", "/home/about"=>"About", "/home/contact"=>"Contact Us"];

        $this->getView("header",array("pagename"=>"profile"));

        $this->getView("navigation", $nav);

        echo "<p style='padding-top: 75px;'>This is a protected area!</p>";

    }

}
?>