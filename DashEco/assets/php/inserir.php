<?php
    include("conexao.php");

    $cont1 = $_POST['cont1'];
    $sal1 = $_POST['sal1'];
    $cont2 = $_POST['cont2'];
    $sal2 = $_POST['sal2'];
    $cont3 = $_POST['cont3'];
    $sal3 = $_POST['sal3'];
    $cont4 = $_POST['cont4'];
    $sal4 = $_POST['sal4'];
    $cont5 = $_POST['cont5'];
    $sal5 = $_POST['sal5'];
    $cont6 = $_POST['cont6'];
    $sal6 = $_POST['sal6'];
    $cont7 = $_POST['cont7'];
    $sal7 = $_POST['sal7'];
    $cont8 = $_POST['cont8'];
    $sal8 = $_POST['sal8'];
    $cont9 = $_POST['cont9'];
    $sal9 = $_POST['sal9'];
    $cont10 = $_POST['cont10'];
    $sal10 = $_POST['sal10'];
    $cont11 = $_POST['cont11'];
    $sal11 = $_POST['sal11'];
    $cont12 = $_POST['cont12'];
    $sal12 = $_POST['sal12'];

    $sql = "INSERT INTO Mes(cont1, sal1, cont2, sal2, cont3, sal3, cont4, sal4, cont5, sal5, cont6, sal6, cont7, sal7, cont8, sal8, cont9, sal9, cont10, sal10, cont11, sal11, cont12, sal12) VALUES 
    ('$cont1', '$sal1', $cont2, $sal2, $cont3, $sal3, $cont4, $sal4, $cont5, $sal5, $cont6, $sal6, $cont7, $sal7, $cont8, $sal8, $cont9, $sal9, $cont10, $sal10, $cont11, $sal11, $cont12, $sal12)";

    if (mysqli_query($conexao, $sql)) {
        // header ("Location:painel.php");
        echo "Cadastrado!";
    } else {
        echo "erro". mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>