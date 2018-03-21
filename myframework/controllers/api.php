<?

class api extends AppController{

    public function __construct($parent){
        require_once './google-api-php-client/src/Google/autoload.php';
        $this->parent = $parent;
    }

    public function showApi(){

        $nav = ["/home"=>"Home", "/about"=>"About", "/api/showApi"=>"API", "/shortenerC"=>"Shortener", "/home/contact"=>"Contact Us"];
        $data = $this->parent->getModel("apiM")->googleBooks("Henry David Thoreau");
        $this->getView("header",array("pagename"=>"api"));
        $this->getView("navigation", $nav);
        $this->getView("api", $data);

    }



}

?>