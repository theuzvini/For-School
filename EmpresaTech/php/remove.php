<?php
    include_once 'conexao.php'; 
    $id = $_GET["id_cand"];
    $sql = "DELETE FROM candidato WHERE id_cand =".$id;
    if (mysqli_query($conexao, $sql)) {
        header ("Location:dashboard.php");
    } else {
        echo "erro ao deletar". mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>