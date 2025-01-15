<?php
for ($i = 1; $i <= 20; $i++) {
    $cuadrado = $i * $i;
    if ($cuadrado % 2 == 0) {
        echo "El cuadrado de $i es $cuadrado y es par<br>";
    } else {
        echo "El cuadrado de $i es $cuadrado y es impar<br>";
    }
}
?>
