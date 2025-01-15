<?php
$ipUsuario = $_SERVER['REMOTE_ADDR'];
echo "Tu dirección IP es: $ipUsuario<br>";

if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false) {
    echo "Estás usando Firefox. ¡Genial!";
} else {
    echo "No estás usando Firefox.";
}
?>
