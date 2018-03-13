<?

class auth extends AppController{

    public function __construct($parent){


    }

    public function login(){

        if($_REQUEST['loginEmail'] && $_REQUEST["loginPass"]) {


            if ($_REQUEST['loginEmail'] == "test@example.com" && $_REQUEST["loginPass"] == "password") {

                $_SESSION["loggedin"]=1;
                header("Location:/profile");

            } elseif ($_REQUEST['loginEmail'] == "admin@domain.com" && $_REQUEST["loginPass"] == "admin") {

                $_SESSION["loggedin"]=1;
                $_SESSION["isadmin"]=1;
                header("Location:/admin");

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