<?php 
	include "connection.php";

	mysql_query("update cart set p_quan='$_GET[quan]' where p_id='$_GET[id]'");
	
?>
<script type="text/javascript">
	window.location="view_cart_product.php";
</script>