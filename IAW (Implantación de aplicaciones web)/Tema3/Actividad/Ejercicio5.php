<?php
if (isset($_GET['tabla']) && is_numeric($_GET['tabla'])) {
    $tabla = $_GET['tabla'];
    echo "Tabla de multiplicar del número $tabla:<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$tabla x $i = " . ($tabla * $i) . "<br>";
    }
} else {
    echo "Por favor, pasa un número válido en el parámetro GET con el nombre 'tabla'.";
}
?>
