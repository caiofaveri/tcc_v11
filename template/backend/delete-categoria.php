<?php
	$identidade = $_POST['id'];
	
	require("connectionbd.php");

	$sqlinsert = "DELETE FROM categoria WHERE id = '$identidade'";
	
	mysqli_query($link, $sqlinsert) or die("Não foi possível deletar o produto");

	echo "<script>alert('Dados deletados com sucesso!')</script>
			<meta http-equiv='refresh'content=0.1;url='../listagem-categoria.php'> ";
?>