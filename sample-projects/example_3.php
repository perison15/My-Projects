<?php declare (strict_types=1);//going foward we will be using strict mode!

/
function greet() {
    echo "hello world! <br>";
}
greet();//calling the function

function names($fname) {
    echo "$fname Maduve <br>";
}
names("tonderai");
names("Natasha");
names("selena");
names("kane");


//using 2 or more arguments!
// function name($fname,$year) {
//     echo"$fname Maduve, $year <br>";
// }
// name("Tonde",1995);
// name("Selena",2024);

//php with and without the strict mode

// function addNumbers(int $a,int $b) {
//     return $a + $b;
// }
// echo addNumbers(3, 4);

// function setHEight(int $minheight= 70) {
//     echo "the min height is:$minheight <br>";
// }
// setHEight(40);
// setHEight();

// function sum(int $a, int $b) {
//     $z = $a + $b;
//     return $z;
    
// }
// echo"5 + 10 = ".sum(5,10)."<br>";
// echo"15 + 110 = ".sum(15,110)."<br>";
// echo"53 + 10 = ".sum(53,10)."<br>";

//RETURN TYPE DECLARATIONS!!
// function addNumbers(float $a, float $c) :float{
//     return (float) ($a + $c);

// }
// echo addNumbers(4.3,5.4);

//ARRAYS!!

// $cars = ["volvo","Audi","BMW","Benz"];

// foreach($cars as $value) {

// echo "my car is a: ".$value."<br>";
// }
// echo count($cars);

// $cars = ["volvo","Audi","BMW","Benz"];
// $arrLength = count($cars);

// for ($x = 0; $x < $arrLength; $x++) {
//     echo $cars[$x];
//     echo "<br>";
// }
// $cars = ["volvo","Audi","BMW","Benz"];

// foreach($cars as $value) {
//     echo $value;
//     echo"<br>";
// }

//ASSOCIATIVE ARRAYS

// $age = ["peter"=>35, "john"=>36, "fatso"=>27, "wesley"=> 62];
// echo "Peter is ".$age["peter"]."years old!";

// $age = ["peter"=>35, "john"=>36, "fatso"=>27, "wesley"=> 62];
// foreach($age as $x => $x_value) {
//     echo "Key = ".$x." value =".$x_value;
//     echo"<br>";
// }

//Array  methods

// $cars = ["volvo","Audi","BMW","Benz"];
// sort($cars);
// foreach($cars as $value) {
//     echo $value;
//     echo", ";
// }

// $cars = ["volvo","Audi","BMW","Benz"];
// rsort ($cars);
// $arrLength = count($cars);
// for($x = 0; $x < $arrLength; $x++) {
//     echo $cars[$x];
//     echo"<br>";
// }

// $cars = array("Volvo", "BMW", "Toyota");
// sort($cars);

// $clength = count($cars);
// for($x = 0; $x < $clength; $x++) {
//     echo $cars[$x];
//     echo "<br>";
// }

// $age = ["peter"=>35, "john"=>36, "fatso"=>27, "wesley"=> 62];
// asort($age);
//  $arrLength = count($age);
//  foreach($age as $x => $y) {
//      echo"Key = ".$x." value = ".$y;
//      echo"<br>";
//  }
?>
