<?php

class about extends AppController{

    public function __construct($parent){

        $this->parent = $parent;
        $this->showList();

    }

    public function showList(){

        $nav = ["/home"=>"Home", "/about"=>"About", "/home/contact"=>"Contact Us"];
        $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
        $this->getView("header",array("pagename"=>"about"));
        $this->getView("navigation", $nav);
        $this->getView("about", $data);

    }

    public function addForm(){

        $nav = ["/home"=>"Home", "/about"=>"About", "/home/contact"=>"Contact Us"];
        $this->getView("header",array("pagename"=>"about"));
        $this->getView("navigation", $nav);
        $this->getView("addForm");

    }

    public function addItem(){

        $this->parent->getModel("fruits")->add("insert into fruit_table (name) values (:name)", array(":name"=>$_REQUEST["name"]));

        header("Location:/about");

    }

}

?>