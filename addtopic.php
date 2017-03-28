<!DOCTYPE html>
<html>
<head></head>
<body>   
<div class="content">
<form action="Webboard.php">
    <form action="newtopic.php" method="POST">
	 <table width="621" border="1" cellpadding="1" cellspacing="1">
	 <tr>
        <label>Question: </label>
        <input name="question" type="varchar" size="25" />
	</tr>
    <tr>
	
		
		<td width="78">Details</td>
      <td><textarea name="detail" cols="50" rows="5"></textarea></td>
	</tr>
    <tr>
		 <label>Name: </label>
        <input name="name" type="varchar" size="25" />
		</tr>
  </table>
        <input name="mySubmit" type="submit" value="Submit!"  />
    </form>
	    </form>
</div>
</body>
</html>