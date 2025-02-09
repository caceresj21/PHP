<?php
// Función para verificar si una cadena es un palíndromo
function esPalindromo($cadena) {
    // Convertir la cadena a minúsculas y eliminar espacios
    $cadena = strtolower(preg_replace("/\s+/", "", $cadena));

    // Comprobar si la cadena es igual a su reverso
    if ($cadena == strrev($cadena)) {
        return true; // Es un palíndromo
    }

    return false; // No es un palíndromo
}

// Ejemplo de uso
$cadena = "Anita lava la tina"; // Puedes cambiar la cadena
if (esPalindromo($cadena)) {
    echo "\"$cadena\" es un palíndromo.";
} else {
    echo "\"$cadena\" no es un palíndromo.";
}
?>
