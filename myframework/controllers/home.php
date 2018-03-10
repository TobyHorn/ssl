<?php

class home extends AppController{

    public function __construct($parent){

        //var_dump($parent);

    }

    //Default function
    public function index(){

        $nav = ["/home"=>"Home", "/home/about"=>"About", "/home/contact"=>"Contact Us"];

        $this->getView("header",array("pagename"=>"home"));

        $this->getView("navigation", $nav);

        $this->getView("home");

    }
    
    //About view function
    public function about(){
        
        $nav = ["/home"=>"Home", "/home/about"=>"About", "/home/contact"=>"Contact Us"];

        $this->getView("header",array("pagename"=>"about"));

        $this->getView("navigation", $nav);

        $this->getView("about");
        
    }

    //Contact view function
    public function contact() {
        $nav = ["/home"=>"Home", "/home/about"=>"About", "/home/contact"=>"Contact Us"];

        $this->getView("header",array("pagename"=>"contact"));

        $this->getView("navigation", $nav);

        $this->getView("contact");
    }

    //Post-View for contact form
    public function contactRec(){

        $nav = ["/home"=>"Home", "/home/about"=>"About", "/home/contact"=>"Contact Us"];

        $this->getView("header",array("pagename"=>"contact"));

        $this->getView("navigation", $nav);

        //Validate Email
        if(!filter_var($_POST["contactEmail"],FILTER_VALIDATE_EMAIL)) {

            echo "<div class='container'>";

            //Display email error message
            echo "<div class='alert alert-danger' style='margin-top:75px;' role='alert'><strong>Error: Invalid Email!</strong> <a href='/home/contact/' class='alert-link'>Click here to try again!</a></div>";

            //Check if the message field was filled out (with 10 characters); if not display another error message
            if (strlen($_POST["message"]) <= 10) {
                echo "<div class='alert alert-danger' role='alert'><strong>Error: </strong>You must enter at least 10 characters in the message field! <a href='/home/contact/' class='alert-link'>Click here to try again!</a></div>";
            }

            //Check if terms were check; if not display another error message
            if(!isset($_POST["terms"])) {
                echo "<div class='alert alert-danger' role='alert'><strong>Error: </strong>You must agree to the terms and conditions. <a href='/home/contact/' class='alert-link'>Click here to try again!</a></div>";
            }

            echo "</div>";




            //If email is valid, check if message field was filled out correctly
        } elseif(strlen($_POST["message"]) <=10) {

            echo "<div class='container'>";

            echo "<div class='alert alert-danger' style='margin-top:75px;' role='alert'><strong>Error: </strong>You must enter at least 10 characters in the message field! <a href='/home/contact/' class='alert-link'>Click here to try again!</a></div>";

            //Check if the terms were agreed to
            if(!isset($_REQUEST["terms"])) {
                echo "<div class='alert alert-danger' role='alert'><strong>Error: </strong>You must agree to the terms and conditions. <a href='/home/contact/' class='alert-link'>Click here to try again!</a></div>";
            }

            echo "</div>";




            //If message was filled out correctly, check if the terms were agreed to
        } elseif (!isset($_REQUEST["terms"])){

            echo "<div class='container'><div class='alert alert-danger' style='margin-top:75px;' role='alert'><strong>Error: </strong>You must agree to the terms and conditions. <a href='/home/contact/' class='alert-link'>Click here to try again!</a></div></div>";




            //If no errors, we let the user know the submission went through
        } else {

            echo "<div class='container'><div class='alert alert-success' style='margin-top:75px;' role='alert'><strong>Success!</strong> We have received your inquiry!</div></div>";

        }

    }

    //Login function (Login info user:pass == test@example.com:password)
    public function loginRec() {

        if($_REQUEST["loginEmail"]=="test@example.com"){

            if($_REQUEST["loginPass"]=="password") {
                echo "Welcome";
            } else {
                echo "Invalid Password";
            }

        } else {
            echo "Invalid Email";
        }
    }

}

?>