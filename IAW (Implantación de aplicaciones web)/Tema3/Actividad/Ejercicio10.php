<?php
$array = [];
while (count($array) < 50) {
    $array[] = rand(1, 100);
}
echo "Contenido del array:<br>";
echo implode(", ", $array);
?>
