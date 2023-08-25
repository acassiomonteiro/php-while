<?php

$numero = 1;
while ($numero <= 30){

    if (($numero % 3 == 0) || ($numero % 5 == 0)) {
        echo "Número:" . $numero . "<br>";
    }
    $numero++;
}

?>