<?php
   include_once("conexao.php");

   $nome=$_POST['nome'];
   $genero=$_POST['genero'];
   $categoria=$_POST['categoria'];
   $telefone=$_POST['telefone'];
   $email=$_POST['email'];
   $senha=$_POST['senha'];

    $sql="INSERT INTO ong (nome, genero, categoria, telefone, email, senha)
            VALUES ('$nome', '$genero', '$categoria', '$telefone', '$email', '$senha')";
    if(mysqli_query($conexao, $sql)){
        echo "usuario castrado com sucesso";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
    ?>