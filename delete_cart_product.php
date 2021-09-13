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
	else
	{
		include "connection.php";
		mysql_query("delete from cart where id='$_GET[id]'");
		?>
        <script type="text/javascript">
			window.location="view_cart_product.php";
        </script>
			<?php
	}
?>