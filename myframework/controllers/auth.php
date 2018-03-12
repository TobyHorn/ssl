<?php

class auth extends AppController{

    public function __construct($parent){


    }

    public function login(){

        if($_REQUEST['loginEmail'] && $_REQUEST["loginPass"]) {


            if ($_REQUEST['loginEmail'] == "test@example.com" && $_REQUEST["loginPass"] == "password") {

                $_SESSION["loggedin"]=1;
                header("Location:/home");

            } else {

                header("Location:/home?msg=bad_login");

            }

        } else {

            header("Location:/home?msg=bad_login");

        }

    }

    public function logout() {

        session_destroy();
        header("Location:/home");


    }

}
?>