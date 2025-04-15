<?php
include("conexao.php");

$id = $_POST['id'];
$nome_completo= $_POST['nome'];
$email = $_POST['email'];

$sql = "UPDATE Candidato SET nome_completo='$nome_completo', email='$email' WHERE id_cand=$id";

if (mysqli_query($conexao, $sql)) {
    header("Location: dashboard.php");
} else {
    echo "Erro ao atualizar: " . mysqli_error($conexao);
}
?>
