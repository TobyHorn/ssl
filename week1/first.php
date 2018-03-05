<?

class myClass{

    //Constructor gets called as soon as the class is instantiated
    public function __construct($num=0){
        echo "Constructor <br/> My Number: " . $num . "<br/>";
    }

    //A method; not called when the class is instantiated
    public function myMethod($name=""){
        //var_dump($_REQUEST);

        //_REQUEST captures the request from the url; in this case ?name={name} is captured
        echo "<br/>Name: " . $_REQUEST["name"];
    }

}

//Use the below method for calling public methods from within classes
$myNewClass = new myClass(123);
$myNewClass->myMethod("Toby");

//Use the below method for calling static methods from within classes
//myClass::myMethod();

?>