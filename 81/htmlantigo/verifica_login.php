<?php

if(!$_SESSION['usuario']) {
	header('Location: pagina_login.php');
	exit();
}
?>
