<?php
	$nome_produto = $_POST['nome_produto'];
	$preco_produto = $_POST['preco_produto'];
	$descricao_produto = $_POST['descricao_produto'];
	$imagem_produto = $_POST['imagem_produto'];
	$identidade = $_POST['id'];
	
	require("connectionbd.php");

	$sqlinsert = "DELETE FROM produto WHERE id = '$identidade'";
	
	mysqli_query($link, $sqlinsert) or die("Não foi possível deletar o produto");

	echo "<script>alert('Dados deletados com sucesso!')</script>
			<meta http-equiv='refresh'content=0.1;url='../listagem-produtos.php'> ";
?>