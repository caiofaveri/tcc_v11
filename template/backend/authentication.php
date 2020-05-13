
<?php
session_start();
include('connectionbd.php');
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../index_loja.php');
	exit();
}
 
$usuario = mysqli_real_escape_string($link, $_POST['usuario']);
$senha = mysqli_real_escape_string($link, $_POST['senha']);
 
$query = "SELECT usuario_id, usuario FROM usuario WHERE usuario = '$usuario' and senha = md5('$senha')";
 
$result = mysqli_query($link, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: ../instrucoes.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../login.php');
	echo "<script>alert('Usuário ou senha incorretos!!')</script>";
	exit();
}
?>