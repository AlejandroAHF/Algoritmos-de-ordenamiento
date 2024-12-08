<?php
/**
 * Este script implementa el algoritmo de Bubble Sort para ordenar una lista de números.
 * Ordena la lista en orden ascendente y muestra la lista antes y después del proceso de ordenamiento.
 */

// Definición del array a ordenar
$array = array(4, -2, 7, -5, 0, 4, 3, 8);

// Mostrar la lista original
echo "Lista original: ";
foreach ($array as $item) {
    echo "$item, ";
}
echo PHP_EOL; // Salto de línea

// Implementación del algoritmo Bubble Sort
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array) - $i - 1; $j++) {
        // Comparar elementos adyacentes y realizar el intercambio si están fuera de orden
        if ($array[$j] > $array[$j + 1]) {
            // Guardar temporalmente el valor mayor
            $numMayor = $array[$j];
            // Intercambiar los elementos
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $numMayor;
        }
    }
}

// Mostrar la lista ordenada
echo "Resultado: ";
foreach ($array as $item) {
    echo "$item, ";
}
?>
