<?php
$servername = "localhost";
$username = "krish";
$password = "123";
$database = "demo"; 
$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("insert into myguests(firstname,lastname)values(?,?)");
$stmt -> bind_param("ss",$firstname,$lastname);
$firstname = "John7";
$lastname = "Doe7";
$stmt->execute();

echo "New records created successfully";
