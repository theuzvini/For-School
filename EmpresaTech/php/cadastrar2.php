<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO Empresa(nome, senha)
    values ('$nome', '$senha')";

    if(mysqli_query($conexao, $sql)){
        header ("Location:dashboard2.php");
    }else{
        echo "Erro". mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>