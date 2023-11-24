<?php
	include_once("conexao.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
		$id	= $_POST['id'];
		$name= $_POST['nome'];
		$genero = $_POST['genero'];
		$categoria = $_POST['categoria'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

	//Edita  dados digitado no formulário
		$query = mysqli_query($conexao, "UPDATE ong SET nome = '$nome', genero = '$genero', categoria = '$categoria', telefone = '$telefone', email = '$email'  WHERE id = '$id' ");

	
	//menssagem
	header("location: editMsg.php");
?>