<?
/* <?php //code ?> isn't needed since php.ini is set to allow the shorthand tags of just <? //code ?> */

$myArr = ["num"=>1, "age"=>25, "innerArr"=>["1", 2]];
$counter = 1;
$name = "Toby";

//var_dump($myArr); ---Displays the structure of the array

foreach ($myArr as $item){
    //echo $item; ---Breaks due to inner array


    echo "Item # $counter = ";
    var_dump($item);
    echo "<br/> ----------- <br/>";

    $counter++;
}

for ($i=0; $i<10; $i++) {
    
    //echo "Hello <br/>";
    
}

?>