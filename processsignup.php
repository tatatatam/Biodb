<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tamtest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$username = $_POST["username"];
$password = $_POST["password"];
$idcard = $_POST["idcard"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
echo $firstname,$password,$username,$idcard;


if ($conn->connect_error) {
    echo "err msg";
	die("Connection failed: " . $conn->connect_error);
	
} 
$sql_insert = "INSERT INTO userdat (username,password,idcard,firstname,lastname) VALUES('$username','$password','$idcard','$firstname','$lastname')";
$sq = $conn->query($sql_insert);
echo "fk";
if ($sq=== TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>