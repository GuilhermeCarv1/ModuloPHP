<?php
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="post">
        Idade: <input type="number" name="idade" id="idade"> <br>
        Telemovel: <input type="text" name="tele" id="tele"><br>
        Horas diarias: <input type="number" name="time" id="time"><br>
        Dias da semana: <input type="number" name="date" id="date"> <br>
        Preço por hora: <input type="number" name="hora" id="hora"><br>
        <button type="submit" name="submit">Mostrar Valores no Console</button>
    </form>
    <?php
if (isset($_POST['submit'])) {
    $idade = $_POST['idade'];
    $telemovel = $_POST['tele'];
    $horas = $_POST['time'];
    $dias = $_POST['date'];
    $precoHora = $_POST['hora'];

    echo "Idade: $idade <br>";
    echo "Telemovel: $telemovel <br>";
    echo "Horas diárias: $horas <br>";
    echo "Dias da semana: $dias <br>";
    echo "Preço por hora: $precoHora <br>";

    $totalHoras = (int)$horas * (int)$dias;
    $totalPreco = $totalHoras * (float)$precoHora;

    echo "Total de horas: $totalHoras <br>";
    echo "Total de preço: $totalPreco <br>";
}
?>


</body>
</html>