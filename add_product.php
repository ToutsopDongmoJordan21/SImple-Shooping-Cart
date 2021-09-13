<?php include "connection.php"; ?>
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


</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center><table border="0" style="border-style:double">
<form action="" method="post" enctype="multipart/form-data">
	<tr>
    	<td>Enter Product ID:</td>
        <td><input type="text" name="pid"> </td>
    </tr>
    <tr>
    	<td>Enter ProductName:</td>
        <td><input type="text" name="pname"></td>
    </tr>
    <tr>
    	<td>Import Product Image:</td>
        <td><input type="file" name="f"></td>
    </tr>
    <tr>
    <tr>
    	<td>Enter Product Quantity:</td>
        <td><input type="text" name="pquan"></td>
    </tr>
    <tr>
    	<td>Enter Product Price:</td>
        <td><input type="text" name="pprice"> </td>
    </tr>
    
   
        <td colspan="2" align="right"><a href="view_product.php">View Product</a><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"></td>
    </tr>
    
</form>
</table>
</center>
<?php 

	if(isset($_POST["submit"]))
	{
		$code = md5(time());//Encryption Algorithm
		$fname = $_FILES["f"]["name"];
		$dst = "./images/".$code.$fname;
		$fdst = "images/".$code.$fname;
	
		//Move Uploaded File To Destination
		move_uploaded_file($_FILES["f"]["tmp_name"],$dst);
		
		mysql_query("insert into product values('$_POST[pid]','$_POST[pname]','$fdst','$_POST[pquan]','$_POST[pprice]')") or die("Error in Query");
		
	}
?>
</body>
</html>