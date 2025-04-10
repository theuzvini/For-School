<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Empresas</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<?php

include("conexao.php");
$sql = "SELECT * FROM Empresa";
$result = mysqli_query($conexao, $sql);
?>
    <div class="container2">
        <h2>Lista de Empresas</h2>
        <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Senha</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
            <td><?php echo $row['Id_emp']; ?></td>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['senha']; ?></td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>

<!-- Warning: Undefined array key "Id_emp" in C:\xampp\htdocs\Matheusphp\EmpresaTech\php\dashboard2.php on line 29

Warning: Undefined array key "nome" in C:\xampp\htdocs\Matheusphp\EmpresaTech\php\dashboard2.php on line 30

Warning: Undefined array key "senha" in C:\xampp\htdocs\Matheusphp\EmpresaTech\php\dashboard2.php on line 31 -->

<!-- create database Site;
use Site;
drop database Site;

create table Candidato(
Id_cand int primary key auto_increment,
nome_completo varchar(255),
email varchar(200)
);

create table Empresa(
Id_emp int primary key auto_increment,
nome varchar (255),
senha varchar(255)
);

select * from Candidato;
select * from Empresa; -->