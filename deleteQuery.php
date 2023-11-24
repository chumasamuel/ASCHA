<?php
	include_once("conexao.php");
	
	$id = $_GET['id'];

	$query = mysqli_query($conexao, "DELETE FROM ong WHERE id = '$id'");
	
	header("location: deleteMsg.php");
?>