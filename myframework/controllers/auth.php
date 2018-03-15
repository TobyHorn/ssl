<?

class auth extends AppController{

    public function __construct($parent){


    }

    public function login(){

        //Read the login text file
        $userFile = file("./assets/login.txt");
        $users = [];


        //Loop through each line
        foreach ($userFile as $user) {

            //Split the line by the delimiter (Name = 0; Password = 1; About = 2;)
            $splitUser = explode("|", $user);

            array_push($users, $splitUser);
        }

        if($_REQUEST['loginEmail'] && $_REQUEST["loginPass"]) {


            if ($_REQUEST['loginEmail'] == "test@example.com" && $_REQUEST["loginPass"] == "password") {

                $_SESSION["loggedin"]=1;
                header("Location:/profile");

            } elseif ($_REQUEST['loginEmail'] == "admin@domain.com" && $_REQUEST["loginPass"] == "admin") {

                $_SESSION["loggedin"]=1;
                $_SESSION["isadmin"]=1;
                header("Location:/profile");

            } elseif (strtolower($_REQUEST['loginEmail']) == strtolower($users[0][0]) && $_REQUEST["loginPass"] == $users[0][1]) {

                $_SESSION["loggedin"]=1;

                $_SESSION["user"]=$users[0];
                header("Location:/profile");

            } elseif (strtolower($_REQUEST['loginEmail']) == strtolower($users[1][0]) && $_REQUEST["loginPass"] == $users[1][1]) {

                $_SESSION["loggedin"]=1;

                $_SESSION["user"]=$users[1];
                header("Location:/profile");

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