<?php 
session_start();
if($_SESSION["user"]=="")
{	
?>
	<script type="text/javascript">
		window.location="login.php";
    </script>
<?php 
}
	include "connection.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div>
<div align="right" style="float:right; padding-left:10px;"><a href="logout.php"><img src="img/logout.gif" height="50px"  width="150px;"/></a></div>

<div style=" float:right; height:50px; width:200px;; background-color:#0C9; text-align:center;"><div style="padding-top:10px;"><a style="color:#FFFFFF; text-decoration:none; font-size:25px;" href="view_cart_product.php">View Cart</a></div></div>
</div>
<div style="float:right; padding-right:10px;"><?php echo "<h1>Welcome ".$_SESSION["user"]."</h1>";?></div>
<table border="1">

<?php 

	$res=mysql_query("select * from product");

	while($row=mysql_fetch_array($res))
	{
?>

	<tr><td>Image:</td><td><img src="<?php echo $row['p_img'];?>" height="150" width="150"></td>
	</tr><tr><td>Name:</td><td><?php echo $row['p_name'];?></td></tr>
	<tr><td>Quantity:</td><td><?php echo $row['p_quan'];?></td></tr>
	<tr><td>Price:</td><td><?php echo $row['p_price'];?></td></tr>
    <tr><td colspan="2"><a href="add_to_cart.php?id=<?php echo $row['p_id']; ?>&quan=1">Add To Cart</a></td></tr>

	<?php }?>
</table>

</body>
</html>