<?php
    include("conexao.php");

    $nome_completo = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO Candidato( nome_completo, email) VALUES 
    ('$nome_completo', '$email')";

    if (mysqli_query($conexao, $sql)) {
        header ("Location:painel.php");
    } else {
        echo "erro". mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>