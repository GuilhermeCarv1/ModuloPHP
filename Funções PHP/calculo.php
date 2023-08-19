<?php

function calcularFatorial($numero) {
    echo $numero;
    if ($numero == 0 || $numero == 1) {
        return 1;
    } else {
        return $numero * calcularFatorial($numero - 1);
    }
}

$numero = 280;
$fatorial = calcularFatorial($numero);
echo "O fatorial de $numero é $fatorial"; 
?>