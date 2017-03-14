<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('tamtest')) {
    die('Could not select database: ' . mysql_error());
}

$username = $_POST["username"];
$password = $_POST["password"];

$result = mysql_query("SELECT idcard FROM userdat WHERE username='$username'  AND password ='$password'");
if (!$result) {
    die('Could not query:' . mysql_error());
}
if($row = mysql_fetch_array($result)){
	header('Location: /testfile/php/Searching.php');
}
else{
	header('Location: /testfile/php/index.php');
}


//echo mysql_result($result, 0); // outputs third employee's name

mysql_close($link);
?>