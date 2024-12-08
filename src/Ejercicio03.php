<?php
/**
 * Este script implementa el algoritmo de Insertion Sort para ordenar una lista de nombres.
 * Ordena los nombres alfabéticamente, ignorando mayúsculas y minúsculas.
 * Muestra la lista original antes del ordenamiento y la lista modificada después de aplicar el algoritmo.
 */

// Definición de la lista de nombres a ordenar
$array = array("Carlos", "Ana", "Beatriz", "Eduardo", "Daniel");

// Mostrar la lista original
echo "Lista original: ";
foreach ($array as $item) {
    echo "$item, ";
}
echo PHP_EOL; // Salto de línea

/**
 * Implementación del algoritmo de Insertion Sort
 * 
 * Recorre el arreglo a partir del segundo elemento y "lo inserta"
 * en la posición correcta en la parte previamente ordenada del arreglo.
 */
for ($i = 1; $i < count($array); $i++) {
    // Almacenar el elemento actual en una variable temporal
    $elemento = $array[$i];
    $j = $i - 1;

    // Comparar e intercambiar elementos si están en el orden incorrecto
    // Utilizamos strcasecmp para realizar comparaciones insensibles a mayúsculas y minúsculas
    while ($j >= 0 && strcasecmp($array[$j], $elemento) > 0) {
        $array[$j + 1] = $array[$j]; // Desplazar el elemento hacia adelante
        $j--;
    }

    // Insertar el elemento en la posición correcta
    $array[$j + 1] = $elemento;
}

// Mostrar la lista ordenada
echo "Lista modificada: ";
foreach ($array as $item) {
    echo "$item, ";
}
?>
