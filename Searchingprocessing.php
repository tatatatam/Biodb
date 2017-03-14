<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('tamtest')) {
    die('Could not select database: ' . mysql_error());
}

$querystr = $_POST["query"];

$result = mysql_query("SELECT * FROM textbook WHERE title LIKE '%$querystr%' OR article LIKE '%$querystr%' OR author LIKE '%$querystr%'");
if (!$result) {
  die('Could not select database: ' . mysql_error());
}
if(!($row = mysql_fetch_array($result))){
	echo 'kiki';
}else{echo 'kiki2';
	
	$num_row = mysql_num_rows($result);
	$i = 0;
	//echo $row[0];
while($i<$num_row){
	echo 'kiki3';
	printf("TITLE: %s  ARTICLE: %s AUTHOR: %s ", $row["title"], $row["article"], $row["author"]);
	$i++;
}
}


//echo mysql_result($result, 0); // outputs third employee's name

mysql_close($link);
?>
	