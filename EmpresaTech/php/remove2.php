<?php
    include_once 'conexao.php'; 
    $id = $_GET["id_emp"];
    $sql = "DELETE FROM empresa WHERE id_emp =".$id;
    if (mysqli_query($conexao, $sql)) {
        header ("Location:dashboard.php");
    } else {
        echo "erro ao deletar". mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>