<?php
	setcookie(md5('userFabrica'),"");
	setcookie(md5('senhaFabrica'),"");
	header("Location:login.php");
?>