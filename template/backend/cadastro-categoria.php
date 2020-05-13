<?php

	require("connectionbd.php");

	$nome_categoria = $_POST['nome_categoria'];  

	$sqlinsert = "INSERT INTO categoria(nome_categoria) VALUES ('$nome_categoria')";

	mysqli_query($link, $sqlinsert) or die("Não foi possível cadastrar o produto");

	echo "<script>alert('Dados cadastrados com sucesso!')</script>
			<meta http-equiv='refresh'content=0.1;url='../cadastro-categoria.php'>";

?>