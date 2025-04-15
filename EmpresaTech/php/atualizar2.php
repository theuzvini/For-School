<?php
include("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "UPDATE Empresa SET nome='$nome', senha='$senha' WHERE id_emp=$id";

if (mysqli_query($conexao, $sql)) {
    header("Location: dashboard2.php");
} else {
    echo "Erro ao atualizar: " . mysqli_error($conexao);
}
?>
