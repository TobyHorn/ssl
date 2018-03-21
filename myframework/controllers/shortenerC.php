<?
//require_once './google-api-php-client/src/Google/autoload.php';
class shortenerC extends AppController{

    public function __construct($parent){

        //Require the google autoload in order for the api to work properly
        require_once './google-api-php-client/src/Google/autoload.php';

        $this->parent = $parent;
    }

    //Get initial view with header and nav
    public function index(){

        $nav = ["/home"=>"Home", "/about"=>"About", "/api/showApi"=>"API", "/shortenerC"=>"Shortener", "/home/contact"=>"Contact Us"];
        $this->getView("header",array("pagename"=>"shortenerC"));
        $this->getView("navigation", $nav);
        $this->getView("shortener");

    }

    //Make short link
    public function shorten(){

        $nav = ["/home"=>"Home", "/about"=>"About", "/api/showApi"=>"API", "/shortenerC"=>"Shortener", "/home/contact"=>"Contact Us"];
        $data = $this->parent->getModel("shortenerM")->shorten($_REQUEST["shortLink"]);
        $this->getView("header",array("pagename"=>"shortenerC"));
        $this->getView("navigation", $nav);
        $this->getView("shortener", $data);

    }

    //Make long link
    public function lengthen(){

        $nav = ["/home"=>"Home", "/about"=>"About", "/api/showApi"=>"API", "/shortenerC"=>"Shortener", "/home/contact"=>"Contact Us"];
        $data = $this->parent->getModel("shortenerM")->lengthen($_REQUEST["longLink"]);
        $this->getView("header",array("pagename"=>"shortenerC"));
        $this->getView("navigation", $nav);
        $this->getView("shortener", $data);

    }

}

?>