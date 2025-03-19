<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
    <pre>
    <?php
    // $x = 75;
    // function myfunction(){
    //     global $x;
    //     echo $x;
    // }
    // myfunction();
   if($_SERVER['REQUEST_METHOD'] =="POST"){
    $fname = $_REQUEST['fname'];
    if(empty($fname)){
        echo 'name is empty';
    }else{
        echo $fname;
    }
   }
   ?>
</pre>
</body>
</html>