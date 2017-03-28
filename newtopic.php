<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webboard";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$Questionid = null;
$Date = date("Y-m-d H:i:s");
$Question = $_POST["question"];
$Detail = $_POST["detail"];
$Name = $_POST["name"];
$sql = "INSERT INTO Webboard (QuestionID,CreateDate,Question,Details,Name) VALUES('$Questionid','$Date','$Question','$Detail','$Name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>