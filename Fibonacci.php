<?php
// Función para generar los primeros n términos de la serie Fibonacci
function generarFibonacci($n) {
    $fibonacci = [0, 1];  // Los dos primeros números de la serie Fibonacci

    // Generar los siguientes números de la serie hasta el n-ésimo
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2]; // Sumar los dos números anteriores
    }

    return $fibonacci;
}

// Ejemplo de uso
$n = 10; // Puedes cambiar el valor de n
echo "Los primeros $n términos de Fibonacci son: ";
print_r(generarFibonacci($n));
?>
