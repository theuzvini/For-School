<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Candidatos</title>
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body>
<?php

include("conexao.php");
$sql = "SELECT * FROM Candidato";
$result = mysqli_query($conexao, $sql);
?>
    <div class="container1">
        <h2>Lista de Candidatos</h2>
        <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
            <td><?php echo $row['Id_cand']; ?></td>
            <td><?php echo $row['nome_completo']; ?></td>
            <td><?php echo $row['email']; ?></td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>
