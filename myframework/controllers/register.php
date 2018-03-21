<?

class register extends AppController{

    public function __construct($parent){
        $this->parent = $parent;
    }

    public function index(){

        $nav = ["/home"=>"Home", "/about"=>"About", "/api/showApi"=>"API", "/shortenerC"=>"Shortener", "/home/contact"=>"Contact Us"];
        $this->getView("header",array("pagename"=>"about"));
        $this->getView("navigation", $nav);
        $this->getView("register");

    }

}

?>