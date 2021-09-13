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
    	<td>Enter Name:</td>
        <td><input type="text" name="name"> </td>
    </tr>
    <tr>
    	<td>Enter Username:</td>
        <td><input type="text" name="uname"></td>
    </tr>
    <tr>
    	<td>Enter Password:</td>
        <td><input type="password" name="pass"></td>
    </tr>
    <tr>
    	<td><a href="login.php">Login</a></td>
        <td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"></td>
    </tr>
    
</form>
</table>
</center>

<?php 
	
	if(isset($_POST[submit]))
	{
		include "connection.php";
		mysql_query("insert into registration values('$_POST[name]','$_POST[uname]','$_POST[pass]')") or die("Error In Query");
	}
?>
</body>
</html>