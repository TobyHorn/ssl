<?php

class profile extends AppController{

    public function __construct($parent){

        if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1) {

        } else {

            header("Location:/home");

        }


    }

    public function index(){

        $nav = ["/home"=>"Home", "/about"=>"About", "/home/contact"=>"Contact Us"];

        $this->getView("header",array("pagename"=>"profile"));

        $this->getView("navigation", $nav);

        $this->getView("profile", array("pagename"=>"profile"));

        echo "<p style='padding-top: 75px;'>This is a protected area!</p>";

    }

    public function update(){

        if($_FILES["img"]["name"]!="") {

            $imageFileType = pathinfo("asset/".$_FILES["img"]["name"], PATHINFO_EXTENSION);

            if(file_exists("asset/".$_FILES["img"]["name"])) {

                echo "Sorry, file exists";

            } else {

                if($imageFileType != "jpg" && $imageFileType != "png") {

                    echo "Sorry, this file type is not allowed";

                } else {

                    if(move_uploaded_file($_FILES["img"]["tmp_name"], "assets/".$_FILES["img"]["name"])) {

                        echo "File uploaded!";

                    } else {

                        echo "Error: File not uploaded";

                    }

                }

            }

        }

        header("Location:/profile?msg=file_uploaded");

    }

}
?>