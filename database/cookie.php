<?php
$cookie_name = "john";
$cookie_value="doe";
setcookie($cookie_name,$cookie_value,time() + (86400 * 30), "/");
?>

<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "cookie name : ".$cookie_name."'is not set'";

        }else{
         echo "cookie name :".$cookie_name."'is set'" ; 
        }
        ?>
    </body>
</html>