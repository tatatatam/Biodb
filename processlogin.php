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

$sql = "SELECT * FROM `userdat` WHERE `username` = '$username' AND `password` = '$password'";
$result = $conn->query($sql);
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($result,MYSQL_NUM))
{
    echo $row['idcard'];
}

if ($result) {
echo 555;
//header('Location: /testfile/php/Searching.php');

} else {
    echo "error";
}
$conn->close();

?>