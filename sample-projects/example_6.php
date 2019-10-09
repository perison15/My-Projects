<?php 
$nameerr = $emailerr = $websiteerr = $gendererr = "";
$name = $email = $website = $comment = $gender = "";

if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(empty($_POST["name"])) {
        $nameerr = "Name is required!";
    } else {
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z]*$/",$name)) {
            $nameerr = "only letters and whitespaces allowed!";
        }
    }
    if(empty($_POST["name"])) {
        $emailerr = "Email is required!";
    } else {
        $email = test_input($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $emailerr = "invalid email format";
        }
    }
    if(empty($_POST["name"])) {
        $websiteerr = "Website is required!";
    } else {
        $website = test_input($_POST["website"]);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteerr = "Invalid URL";
        }
    }
    if(empty($_POST["name"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    if(empty($_POST["name"])) {
        $gendererr = "Gender is required!";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<style>.error {color: #FF0000;}</style>

<h2>PHP form validation</h2>
<span class="error">* required field</span>
<form  method="post" action ="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">
Name :<input type="text" name="name" value = "<?php echo $name ;?>">
<span class="error">*<?php echo $nameerr;?></span>
<br><br>
email :<input type="text" name="email" value = "<?php echo $email ;?>">
<span class="error">*<?php echo $emailerr;?></span>
<br><br>
website:<input type="text" name="website" value = "<?php echo $website ;?>">
<span class="error">*<?php echo $websiteerr;?></span>
<br><br>
comment:<textarea name="comment" rows=5 cols = 40 value = "<?php echo $name ;?>"> </textarea><br>
Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
<span class="error">*<?php echo $gendererr;?></span>
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