
<?php
$servername = "localhost";
$username = "krish";
$password = "123";
$database = "demo"; 
$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "delete from myguests where id=8";

if($conn->query($sql) === true){
    echo"record deleted successfully";
}else{
    echo "0 result found";
}