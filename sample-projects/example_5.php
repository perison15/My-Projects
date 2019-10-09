<?php 

$name= $email = $website = $comment = $gender = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email=test_input($_POST["email"]);
    $website=test_input($_POST["website"]);
    $comment=test_input($_POST["comment"]);
    $gender=test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<h2>PHP form validation</h2>
<form  method="post" action ="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
Name :<input type="text" name="name"><br>
email :<input type="text" name="email"><br>
website:<input type="text" name="website"><br>
comment:<textarea name="comment" rows=5 cols = 40> </textarea><br>
Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="other">Other
<br><br>
<input type="submit" name="submit" value="submit">

</form>
<?php
echo"<h2>OUTPUT</h2>";
echo $name;
echo"<br>";
echo $email;
echo"<br>";
echo $website;
echo"<br>";
echo $comment;
echo"<br>";
echo $gender;
echo"<br>";
?>

