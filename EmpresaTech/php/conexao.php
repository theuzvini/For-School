<?php
$servidor = "localhost";
$usuario = "root";
$senha = "123456";
$dbname = "Site";
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);    
if (!$conexao) {
    die("OPS, sua conexão foi interrompida, o erro está entre o monitor e a cadeira!". mysqli_connect_error());
}
?>