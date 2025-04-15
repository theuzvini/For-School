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
            <td><?php echo $row['id_emp']; ?></td>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['senha']; ?></td>
            <td><a href="editar2.php?id_emp=<?php echo $row['id_emp']; ?>"> 
            <button>Editar</button></a></td></td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>