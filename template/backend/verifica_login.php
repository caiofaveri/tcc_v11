<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!$_SESSION['usuario']){
	header('Location: ../index_loja.php');
	exit();
}
?>