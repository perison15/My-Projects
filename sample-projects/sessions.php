<?php
 session_start();
?>

<!DOCTYPE html>
<html>

    <body>
    
        <?php

            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"]= "rhino";

            echo "session values are set.";

        ?>
    
    </body>

</html>