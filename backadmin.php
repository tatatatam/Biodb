<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('tamtest')) {
    die('Could not select database: ' . mysql_error());
}

$idtitle = null;
$title = $_POST["titile"];
$article = $_POST["article"];
$author = $_POST["author"];


$result = mysql_query("INSERT INTO textbook (idtitle,title,article,author) VALUES('$idtitle','$title','$article','$author')");
if (!$result) {
    die('Could not query:' . mysql_error());
}else{
	header('Location: /testfile/php/addCollect.php');
}


//echo mysql_result($result, 0); // outputs third employee's name

mysql_close($link);
?>