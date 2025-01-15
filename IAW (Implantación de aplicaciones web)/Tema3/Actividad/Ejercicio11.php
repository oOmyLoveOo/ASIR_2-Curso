<?php
$tabla = [
    ["Frutas" => "Manzana", "Deportes" => "Fútbol", "Idiomas" => "Español"],
    ["Frutas" => "Naranja", "Deportes" => "Tenis", "Idiomas" => "Inglés"],
    ["Frutas" => "Sandía", "Deportes" => "Baloncesto", "Idiomas" => "Francés"],
    ["Frutas" => "Fresa", "Deportes" => "Béisbol", "Idiomas" => "Italiano"]
];

echo "<table border='1'>";
echo "<tr><th>Frutas</th><th>Deportes</th><th>Idiomas</th></tr>";
foreach ($tabla as $fila) {
    echo "<tr>";
    echo "<td>{$fila['Frutas']}</td>";
    echo "<td>{$fila['Deportes']}</td>";
    echo "<td>{$fila['Idiomas']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
