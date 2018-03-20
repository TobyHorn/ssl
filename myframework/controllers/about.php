<?php

class about extends AppController{

    public function __construct($parent){

        $this->parent = $parent;

    }

    //READ
    public function index(){

        $nav = ["/home"=>"Home", "/about"=>"About", "/home/contact"=>"Contact Us"];
        $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
        $this->getView("header",array("pagename"=>"about"));
        $this->getView("navigation", $nav);
        $this->getView("about", $data);

    }



    //CREATE
    public function addForm(){

        $nav = ["/home"=>"Home", "/about"=>"About", "/home/contact"=>"Contact Us"];
        $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
        $this->getView("header",array("pagename"=>"about"));
        $this->getView("navigation", $nav);
        $this->getView("addForm");
        $this->getView("about", $data);
    }

    public function addItem(){

        $this->parent->getModel("fruits")->add("insert into fruit_table (name) values (:name)", array(":name"=>$_REQUEST["name"]));

        header("Location:/about");
    }



    //UPDATE
    public function updateItem(){

        $name = $_REQUEST['name'];
        $id = (int)$_REQUEST['id'];

        $this->parent->getModel("fruits")->update("UPDATE fruit_table SET name = $name WHERE id = $id", array("name" => $name, "id" => $id));

        header("Location:/about");
    }

    public function updateForm(){
        $nav = ["/home"=>"Home", "/about"=>"About", "/home/contact"=>"Contact Us"];
        $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
        $this->getView("header",array("pagename"=>"about"));
        $this->getView("navigation", $nav);
        $this->getView("updateForm");
        $this->getView("about", $data);
    }



    //DELETE
    public function deleteItem(){

        $id = $_REQUEST['id'];
        $this->parent->getModel("fruits")->delete("delete from fruit_table where id = $id");

        header("Location:/about");
    }

}

?>