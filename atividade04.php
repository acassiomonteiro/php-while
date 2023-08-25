<?php
$contador = 1;
$soma = 0;

while ($contador <= 10) {
    if ($contador % 2 != 0) { 
        $soma += $contador;
    }
    $contador++; 
}

echo "A soma dos primeiros 10 números ímpares é: $soma";
?>
