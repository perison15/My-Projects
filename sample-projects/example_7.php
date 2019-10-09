<div class="menu" ><?php include 'menu.php';?> </div>
<br><br>
<?php

// $name = test_input($_POST["name"]) {
//     if(!preg_match("/^[a-zA-Z]*$/",$name)) {
//         $nameerr = "only letters and whitespaces allowed!";
//     }
// }

// $email = test_input($_POST["email"]) {
//     if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
//         $emailerr = "invalid email format";
//     }
// }

// $website = testinput($_POST["website"]) {
//     if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
//         $websiteerr = "Invalid URL";
//     }
// }
//Multi dimensional arrays




// $cars = [
//     ["Volvo",22,18],["BMW",32,15],["Benz",19,20],["Toyota",32,16]
// ];

// echo $cars[0][0]." in stock ".$cars[0][1]." and sold ".$cars[0][2]."<br>";
// echo $cars[1][0]." in stock ".$cars[1][1]." and sold ".$cars[1][2]."<br>";
// echo $cars[2][0]." in stock ".$cars[2][1]." and sold ".$cars[2][2]."<br>";
// echo $cars[3][0]." in stock ".$cars[3][1]." and sold ".$cars[3][2]."<br>";

// for ($row = 0; $row < 4; $row++) {
//     echo "<p><b>Row number $row</b></p>";
//     echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//       echo "<li>".$cars[$row][$col]."</li>";
//     }
//     echo "</ul>";
//   }



// DATE AND TIME
// echo "The time is ".date("Y/m/d")."<br>";
// echo "The time is ".date("l")."<br>";
// echo "The time is ".date("Y-m-d")."<br>";
// echo "The time is ".date("Y.m.d")."<br>"."<br>";
// Require 'var.php';
// echo "i have a $color $car";

// include 'footer.php';


//FILE HANDLING!!!
// include "nyasha.mp4";
// echo readfile("nyasha.mp4");


// $myfile = fopen("kms8.log","r+") or die ("file failed to open");
// echo fread($myfile,filesize("kms8.log"));
// fclose($myfile);

// $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("webdictionary.txt"));
// fclose($myfile);

// $myfile = fopen("kms8.log","r") or die ("failed to open the file!");
// echo fgets($myfile);
// fclose($myfile);

//READING THE FILE LINE BY LINE

// $myfile = fopen("kms8.log","r") or die ("baf luck");
// while (!feof($myfile)) {
//     echo fgetc($myfile)." <br>";
// }
// fclose($myfile);

// $myfile = fopen("truel.txt","w");

// $myfile = fopen("truel.txt","w") or die ("unable to open the file.");
// $txt = "Tonderai maduve\n";
// fwrite($myfile,$txt);
// $txt = "Monica maduve\n";
// fwrite($myfile,$txt);
// fclose($myfile);



// $myfile = fopen("truel.txt","r") or die ("dont pretend");
// while(!feof($myfile)) {
// echo fgets($myfile)."<br>";
// }
// fclose($myfile);


$myfile = fopen("truel.txt","w") or die ("unable to open file");
$txt = "carol\n";
fwrite($myfile,$txt);
$txt = "maduve\n";
fwrite($myfile,$txt);
fclose($myfile);

$myfile = fopen("truel.txt","r") or die ("hunnid");
while(!feof($myfile)) {
echo    fgets($myfile)."<br>";
}
fclose($myfile);
?>