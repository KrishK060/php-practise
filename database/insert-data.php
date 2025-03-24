<?php 
$servername = "localhost";
$username = "krish";
$password = "123";
$database = "demo"; 
$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "insert into myguests(firstname,lastname)
values('john5','doe5')";

// if($conn->query($sql) === TRUE){
//     echo "data inserted succesfully";
// }else{
//     echo "error".$conn->error;
// }

if($conn->query($sql) === TRUE){
    $last_id = $conn->insert_id;
    echo "last id is :".$last_id;
}else{
    echo "error".$conn->error;

}

?>
