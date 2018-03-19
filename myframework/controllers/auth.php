<?

class auth extends AppController{

    public function __construct($parent){

        $this->parent = $parent;

    }

    public function login(){


        if ($_REQUEST['loginEmail'] && $_REQUEST["loginPass"]) {

            echo "<br><br>Inside Login: ".var_dump($this->parent);

            $data = $this->parent->getModel("users")->select("select * from users where email = :email and password = :password", array(":email" => $_REQUEST['loginEmail'], ":password" => sha1($_REQUEST['loginPass'])));

            var_dump($data);

            if ($data) {

                $_SESSION["loggedin"] = 1;
                header("Location: /profile");
            } else {
                header("Location: /home?msg=bad_login");
            }
        }

        /*//Read the login text file
        $userFile = file("./assets/login.txt");


        if($_REQUEST['loginEmail'] && $_REQUEST["loginPass"]) {

            //Loop through each line
            foreach ($userFile as $user) {

                //Split the line by the delimiter (Name = 0; Password = 1; About = 2;)
                $splitUser = explode("|", $user);

                if ($_REQUEST["loginEmail"] == $splitUser[0] && $_REQUEST["loginPass"] == $splitUser[1]) {

                    $_SESSION["loggedin"]=1;
                    $_SESSION["user"]=$splitUser[0];
                    header("Location:/profile");
                }

            }

            header("Location:/home?msg=bad_login");

        } else {

            header("Location:/home?msg=bad_login");

        }*/

    }

    public function logout() {

        session_destroy();
        header("Location:/home");


    }

}

?>