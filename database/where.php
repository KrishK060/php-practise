<?php
$servername = "localhost";
$username = "krish";
$password = "123";
$database = "demo"; 
$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "select id,firstname,lastname from myguests where firstname='john5'";
$result = $conn->query($sql);

if($result->num_rows>0){
    echo"<table><tr><th>ID</th><th>Name</th></td>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</tr></td>";
    }
}else{
    echo "0 result found";
}