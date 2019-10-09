<?php

/*
    $txt = "i love wednesdays!";
    echo "i thought i loved tuesdays but damn $txt";



/*

//EXAMPLE 1 WITH GLOBAL SCOPES
//global scopes
$x = 5;
 function mytest() {
     //using x can generate an error
     echo "<p>the value of x is: $x </p>";
 }
 mytest();
 //x can be accessed here as well
 echo "<p>value of x is: $x !</p>";
 
 */

/*
 //EXAMPLE 2 WITH LOCAL SCOPES
 function mytest() {
     $y = 6;
     echo "<p>the number which is in front of 5 is definately: $y !</p>";
 }
 mytest();
 //this will bring an error
 echo"<p>6 albums in 6 years pakaita umwe $y ya illuminate. </p>";
*/

/*
//The global keyword

$x = 5;
function mytest() {
    //using the global keyword
    global $x;
    echo"<p>lets try and use this number:". $x."!</p>";
}
mytest();

*/

/*

//THE GLOBALS[] ARRAY
$x = 5;
$y = 6;

function mytest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];

}

mytest();
echo $y;

*/

/*
//THE STATIC KEYWORD
 function mytest() {
     static $x = 0;
     echo $x;
     $x++;
 }
echo"<br>";
mytest();
echo"<br>";
mytest();
echo"<br>";
mytest();

*/

/*

//ECHO AND PRINT

echo "<p>This ","string ","was made ","with multiple parameters!</p>";

//print statement
print"<h2>PHP is easy right?</h2>";
print"yeah for sure!";

*/

/*
//PHP DATA TYPES

$x = 5346;
var_dump($x);

//float
print"<br>";
$y = 10.7847;
var_dump($y);

//boolean
print"<br>";
$z = true;
var_dump($z);

//arrays
$cars = ['volvo','mustang','bmw','benz'];
var_dump($cars);

//objects
echo"<br>";
class people {
    function people() {
        $this->person = "Tonde";
        }
    }
    //object is created here!
    $biggie = new people();
    //show object properties
    echo $biggie->person;

//objects for practise
echo"<br>";
class schools {
    function schools() {
        $this->school = "look at yall loosing to the kids again";
    }
}
$see = new schools();
echo $see->school;

echo"<br>";
class msu {
    function msu() {
        $this->student = "is good";
    }
}
$hey = new msu();
echo $hey->student;

//null data type
echo"<br>";
$x = "hello pips";
$x = null;
var_dump($x);

*/

/*

//STRINGS
echo strlen("hello!");
echo"<br>";
print strlen("good");

//str_word_count
print"<br>";
echo str_word_count("heal the world!");
//strrev
print"<br>";
echo strrev("Tonderai");
//strpos
echo"<br>";
echo strpos("hello, world", "w");

//str_replace
echo"<br>";
echo str_replace("world","author","hello world");
//md5()
echo"<BR>";
$string = "Tonderai";
echo md5($string);

*/

/*
//PHP NUMBERS
//int,float
$X = 5985;
var_dump(is_nan($X));

echo"<br>";
$x = 59.85;
var_dump(is_float($x));
//infinity
echo"<br>";
$x = 1.9e411;
var_dump($x);

//casting in php
//float to int
echo"<br>";
$floa = 2323.4343;
$int_cas = (int)$floa;
echo $int_cas;

//string to int
echo"<br>";
$stri = "5000";
$cast_int = (int)$stri;
var_dump($cast_int);
echo $cast_int;

*/

/*
//CONSTANTS

define("name","Tonde Maduve");
echo name;


//they are case sensative futi
echo"<br>";
define("nae","Tonde Maduve");
echo nae;

//creating an array constant

echo"<br>";
define("cars",[
    "volvo","bmw","volvo"
]);
echo cars[0];

//constants are global
echo"<br>";
define("Greetings","hello there!");
function mytest() {
    echo Greetings;

}
mytest();

*/
//PHP conditional statements
//the if statement
/*
$gee = date("H");
if ($gee < 20) {
    echo"you won!";
}



//switch statement.cases

$mango = "tree";
switch($mango) {
    case "tree":
        echo"Mango is the best tree";
        break;
    case "apple":
        echo"apple is the best tree";
        break;
    case "avocado!":
        echo"u dont know about avocado right!";
        break;
    default:
        echo"they all fraud";
        

}
*/


/*
//loops
//while loop
$y = 1;
while($y <= 5) {
    echo"i fell in your mercy! <br>";
    $y++;
}
$x = 1;
do {
    echo"daddy is home! <br>";
    $x++;
}while ($x <=5 );

$z = 8;
do {
    echo"i'm your father! <br>";
    $z++;
}while ($z <= 5);

//the for loop
for ($i = 0; $i < 10; $i++) {
    echo"crossing over! <br>";
}
//foreach
$cars = ["volvo", "audi", "bmw", "benz"];
foreach ($cars as $value) {
    echo "$value <br>";
}

*/
?>

