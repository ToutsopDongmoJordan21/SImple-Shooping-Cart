<?php 
	include "connection.php";
	
	echo $_POST['txt'];
	
?>

<html>
<body>
<form method="post">
    <input type="text" id="t1" name="txt"  />
    <input type="submit" id="sm" name="submit0" value="Edit" />
</form>
</body>
</html>