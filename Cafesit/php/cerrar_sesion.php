<?php
	@session_start();
	session_destroy();
	header("Location: http://localhost/Cafesit/index.php");
?>