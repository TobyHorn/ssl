<?
/*
 * Toby Horn
 * 3/2/18
 * Server-Side Languages
 * Assignment 1: Run Your Code
 * Section 01
 * */

//1.1 Create new class
class wk1{

    //Create helloWorld method
    public function helloWorld() {

        //Echo out "Hello World"
        echo "Hello World!<br/>";
    }

    //Create users function
    public function users() {

        //Declare name variable and assign it a string value
        $name = "Toby";
        //Declare age variable and assign it a int value
        $age = 25;
        //Create a person array with a value at 0 and 1 index along with key/value pairs to follow
        $person = [$name,$age,"name"=>$name,"age"=>$age];

        //2.1 Echo name & age using the name & age variables (using double quotes)
        echo "<br/>1: My name is $name and my age is $age<br/>";

        //2.2 Echo name & age the name & age variables (using single quotes and concatenation)
        echo '<br/>2: My name is '.$name.' and my age is '.$age;

        //2.3 Echo name & age using the index of 0 & 1 in the person array
        echo "<br/><br/>3: My name is $person[0] and my age is $person[1]<br/>";

        //2.4 Echo name & age using the 'name' & 'age' keys in the person array
        echo "<br/>4: My name is $person[name] and my age is $person[age]<br/>";

        //2.5 Set the age variable to the value of null
        $age = null;
        //Echo the newly set value of the age variable
        echo $age; //DOES NOT ECHO OUT ANYTHING

        //2.6 Unset the name variable
        unset($name);
        //Echo the newly changed value of the name variable
        echo $name."<br/>"; //UNSET CAUSED THE VARIABLE TO BE DELETED ENTIRELY

    }

}

//1.2 Instantiate class
$newWk1Class = new wk1();

//1.3 Call helloWorld method
$newWk1Class->helloWorld();

//1.3 Call users method
$newWk1Class->users();

//Create a function to tell the letter grade based on the number provided
function grades($grade) {

    //Create if..elseif..else loop to find the correct letter value based on the number passed into the function
    if ($grade < 61 ) {
        $results = "Your number grade was $grade which means your letter grade was a F!";
    } elseif ($grade < 70) {
        $results = "Your number grade was $grade which means your letter grade was a D!";
    } elseif($grade < 80) {
        $results = "Your number grade was $grade which means your letter grade was a C!";
    } elseif($grade < 90) {
        $results = "Your number grade was $grade which means your letter grade was a B!";
    } else {
        $results = "Your number grade was $grade which means your letter grade was an A!";
    }

    return $results;
}

//Call the grades function and provide values
//3.1 Grade of 94
echo grades(94)."<br/>";
//3.2 Grade of 54
echo grades(54)."<br/>";
//3.3 Grade of 89.9
echo grades(89.9)."<br/>";
//3.4 Grade of 60.01
echo grades(60.01)."<br/>";
//3.5 Grade of 102.1
echo grades(102.1)."<br/>";

//Create an array of colors that are indexed by integers
$color = [0=>"Red", 1=>"Blue", 2=>"Purple", 3=>"Pink", 4=>"Green", 5=>"Yellow", 6=>"Orange", 7=>"Black", 8=>"Brown", 9=>"Peach"];
//Create a counter variable
$counter = 0;
//Loop through the array and echo out the values
foreach ($color as $item) {

    //Display the current iteration's value within the array
    echo "<br/>Index #$counter is $item.";

    //Increment the counter
    $counter++;
}

?>