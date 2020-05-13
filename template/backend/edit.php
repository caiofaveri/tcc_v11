  
<?php
	require("connectionbd.php");

	$nome_produto = $_POST['nome_produto_edit'];
	$preco_produto = $_POST['preco_produto_edit'];
	$descricao_produto = $_POST['descricao_produto_edit'];
	$categoria_produto = $_POST['categoria_produto'];
	// $imagem_produto = $_POST['imagem_produto_edit'];
	$identidade = $_POST['id'];

	$query = "SELECT imagem_produto FROM produto WHERE id = '$identidade'";

	$resultado = mysqli_query($link, $query);

	$dados = mysqli_fetch_array($resultado);
	
	if(isset($_POST['imagem_produto_edit'])){
	$imagem_produto = addslashes(file_get_contents($_FILES["imagem_produto_edit"]["tmp_name"]));  
	}else{
	$imagem_produto = $dados['imagem_produto'];
	}

	if(isset($_POST['produto_novo'])){
		$produto_novo = 1;
	}else{
		$produto_novo = 0;
	}
	
	$sqlinsert = "UPDATE produto SET nome_produto = '$nome_produto', preco_produto = '$preco_produto', descricao_produto = '$descricao_produto', imagem_produto = '$imagem_produto', produto_novo = '$produto_novo', fk_categoria = '$categoria_produto' WHERE id = '$identidade'";
	
	mysqli_query($link, $sqlinsert) or die("Não foi possível editar o produto");

	echo "<script>alert('Dados editados com sucesso!')</script>
		<meta http-equiv='refresh'content=0.1;url='../listagem-produtos.php'>";
?>