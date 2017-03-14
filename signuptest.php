d<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('tamtest')) {
    die('Could not select database: ' . mysql_error());
}


$username = $_POST["username"];
$password = $_POST["password"];
$idcard = $_POST["idcard"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];

$result = mysql_query("INSERT INTO userdat (username,password,idcard,firstname,lastname) VALUES('$username','$password','$idcard','$firstname','$lastname')");
if (!$result) {
    die('Could not query:' . mysql_error());
}else{
	echo 'success';
}



//echo mysql_result($result, 0); // outputs third employee's name

mysql_close($link);
?>