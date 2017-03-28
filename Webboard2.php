<html>
<head>
<title>ThaiCreate.Com</title>
</head>
<body>
<a href="addtopic.php">New Topic</a>
<?php
$objConnect = mysqli_connect("localhost","root","","webboard") or die("Error Connect to Database");
//$objDB = mysqli_select_db("webboard");
$strSQL = "SELECT * FROM webboard ";
$objQuery = mysqli_query($objConnect,$strSQL) or die ("Error Query [".$strSQL."]");
$Num_Rows = mysqli_num_rows($objQuery);

$Per_Page = 10;   // Per Page
$Page=1;
if(isset($_GET["Page"]))
{
	$Page=$_GET["Page"];
}

$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
	$Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
	$Num_Pages =($Num_Rows/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}

$strSQL .=" order  by QuestionID DESC LIMIT $Page_Start , $Per_Page";
$objQuery  = mysqli_query($objConnect,$strSQL) or die ("Error Query [".$strSQL."]");;
?>
<table width="909" border="1">
  <tr>
    <th width="99"> <div align="center">QuestionID</div></th>
    <th width="458"> <div align="center">Question</div></th>
    <th width="90"> <div align="center">Name</div></th>
    <th width="130"> <div align="center">CreateDate</div></th>
    <th width="45"> <div align="center">View</div></th>
    <th width="47"> <div align="center">Reply</div></th>
  </tr>
<?php
while($objResult = mysqli_fetch_assoc($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["QuestionID"];?></div></td>
    <td><a href="ViewWebboard.php?QuestionID=<?php echo $objResult["QuestionID"];?>"><?php echo $objResult["Question"];?></a></td>
    <td><?php echo $objResult["Name"];?></td>
    <td><div align="center"><?php echo $objResult["CreateDate"];?></div></td>
    <td align="right"><?php echo $objResult["View"];?></td>
    <td align="right"><?php echo $objResult["Reply"];?></td>
  </tr>
<?php
}
?>
</table>

<br>
Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
<?php
if($Prev_Page)
{
	echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}

for($i=1; $i<=$Num_Pages; $i++){
	if($i != $Page)
	{
		echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
	}
	else
	{
		echo "<b> $i </b>";
	}
}
if($Page!=$Num_Pages)
{
	echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
}
mysqli_close($objConnect);
?>
</body>
</html>