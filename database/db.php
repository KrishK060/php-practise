<?php 
$servername = "localhost";
$username = "krish";
$password = "123";
$database = "demo"; 
$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Database connected successfully";
$sql = "create table myguests(
id int AUTO_INCREMENT PRIMARY KEY,
firstname varchar(255) NOT NULL,
lastname varchar(255) NOT NULL
)";

if($conn->query($sql) === TRUE){
    echo "table created succesfully";
}else{
    echo "error".$conn->error;
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Database connected successfully";
// $sql = "insert into myguests(firstname,lastname)
// values('john','doe')";

// if($conn->query($sql) === TRUE){
//     echo "data inserted succesfully";
// }else{
//     echo "error".$conn->error;
// }
?>
