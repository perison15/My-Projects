<?php
// $cookieUser = "user";
// $cookieName = "john doe";
// setcookie($cookieUser,$cookieName,time()+86400 * 30,"/");
setcookie("test_cookie","test",time() + 3600,"/");
?>
<html>
<body>

<?php
if(count($_COOKIE > 0)) {
    echo "cookies are enabled";
} else {
    echo "cookies are disabled";
}
// if(!isset($_COOKIE[$cookieUser])) {
//  echo "cookie named".$cookieUser." is not set.";
// }else {
//     echo "cookie named ".$cookieUser." is set<br>";
//     echo "value is ".$_COOKIE[$cookieUser];
// }

?>

</body>
</html>