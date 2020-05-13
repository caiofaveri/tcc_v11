  
<?php
	$nome_categoria = $_POST['nome_categoria_edit'];
	$identidade = $_POST['id'];
	
	require("connectionbd.php");

	$sqlinsert = "UPDATE categoria SET nome_categoria = '$nome_categoria' WHERE id = '$identidade'";
	
	mysqli_query($link, $sqlinsert) or die("Não foi possível editar o produto");

	echo "<script>alert('Dados editados com sucesso!')</script>
			<meta http-equiv='refresh'content=0.1;url='../listagem-categoria.php'>";
?>