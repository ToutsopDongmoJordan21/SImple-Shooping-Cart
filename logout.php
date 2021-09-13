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
		session_destroy();
		?>
        <script type="text/javascript">
			window.location="login.php";
        </script>
			<?php
	}
?>