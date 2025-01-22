<?php
$numeros = [8, 3, 1, 7, 5, 6, 4, 2];
echo "Array original: " . implode(", ", $numeros) . "<br>";

// Ordenar el array
sort($numeros);
echo "Array ordenado: " . implode(", ", $numeros) . "<br>";

// Mostrar longitud
echo "Longitud del array: " . count($numeros) . "<br>";

// Buscar un número
$buscar = 5;
if (in_array($buscar, $numeros)) {
    echo "El número $buscar está en el array.<br>";
} else {
    echo "El número $buscar no está en el array.<br>";
}
?>
