<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT id, firstname FROM biodb WHERE username = $username AND password = $password";
$result = $conn->query($sql);

if ($result!= null) {
 echo $result;
} else {
    echo "0 results";
}
$conn->close();

?>