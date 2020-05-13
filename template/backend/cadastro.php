<?php

	require("connectionbd.php");

	$nome_produto = $_POST['nome_produto'];
	$preco_produto = $_POST['preco_produto'];
	$descricao_produto = $_POST['descricao_produto'];
	$imagem_produto = $_POST['imagem_produto'];
	$categoria_produto = $_POST['categoria_produto'];
	$produto_novo = 0;

	if(isset($_POST['produto_novo'])){
		$produto_novo = 1;
	}else{
		$produto_novo = 0;
	}

	$file = addslashes(file_get_contents($_FILES["imagem_produto"]["tmp_name"]));  

	$sqlinsert = "INSERT INTO produto(nome_produto, preco_produto, descricao_produto, imagem_produto, produto_novo, fk_categoria) VALUES ('$nome_produto', '$preco_produto', '$descricao_produto', '$file', '$produto_novo', '$categoria_produto')";

	mysqli_query($link, $sqlinsert) or die("Não foi possível cadastrar o produto");

	echo "<script>alert('Dados cadastrados com sucesso!')</script>
			<meta http-equiv='refresh'content=0.1;url='../cadastro.php'>";

?>
