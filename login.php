<?php
	session_start();
	include "connection.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
td
{
	background-color:#0076EC;
	color:#FFF;
	font-size:24px;
	padding:20px;
}
input
{
	height:30px;
	color:#333333;
	font-size:18px;
	
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center><table border="0" style="border-style:double">
<form action="" method="post">

    <tr>
    	<td>Enter Username:</td>
        <td><input type="text" name="unam"></td>
    </tr>
    <tr>
    	<td>Enter Password:</td>
        <td><input type="password" name="pas"></td>
    </tr>
    <tr>
    	<td style="color:#0FC;"><a href="registration.php">Registration</a></td>
        <td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"></td>
    </tr>
    
</form>
</table>
</center>

<?php 
	
	$un=$_POST["unam"];
	$pa=$_POST["pas"];
	
	if(isset($_POST['submit']))
	{
		$res = mysql_query("select uname,password from registration where uname='$un' && password='$pa'");
		
		while($row = mysql_fetch_array($res))
		{		
			$_SESSION["user"] = $row["uname"];
		?>
        <script type="text/javascript">
			window.location="view_product.php";	
        </script>
		<?php
		}
		//headerlocation("registration.php");
	}
?>

</body>
</html>