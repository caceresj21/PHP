<?php
// Función que determina si un número es primo
function esPrimo($numero) {
    if ($numero <= 1) {
        return false; // Los números menores o iguales a 1 no son primos
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Si el número es divisible por otro distinto de 1 y sí mismo, no es primo
        }
    }

    return true; // Si no se encontró ningún divisor, el número es primo
}

// Ejemplo de uso
$numero = 17; // Puedes cambiar el número para probar
if (esPrimo($numero)) {
    echo "$numero es primo.";
} else {
    echo "$numero no es primo.";
}
?>
