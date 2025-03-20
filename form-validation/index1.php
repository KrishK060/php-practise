<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(empty($_POST["name"])) {
        echo  "please add the name";
    }else{
        $name = htmlspecialchars($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            echo "Only letters and white space allowed";
          }
          echo $name;
    }
    
    if(empty($_POST["email"])){
        echo "please enter the valid email";
    }else{
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
          }
    }

    if(empty($_POST["gender"])){
        echo "please select the gender";
    }else{
        $gender = htmlspecialchars($_POST["gender"]);
    }
    if($isvalid){
        echo "<script>alert('Form submitted successfully!');</script>";

    }
}

// $savingDetails = $saving ->getAccountDetail();
// echo "Account Number: " . $savingDetails[0] . "<br>";
// echo "Balance: " . $savingDetails[1] . "<br>";

// function getAccountDetail(){
//     return [$this->accountNumber,$this->balance];
// }