<?php
/**
 * Este script implementa el algoritmo Merge Sort para ordenar una lista de palabras alfabéticamente.
 * Ordena las palabras en orden alfabético, independientemente de mayúsculas y minúsculas.
 * Muestra la lista original y la lista ordenada después del proceso.
 */

/**
 * Ordena un arreglo de palabras alfabéticamente utilizando el algoritmo Merge Sort.
 * 
 * $array Arreglo de palabras a ordenar.
 * Arreglo ordenado alfabéticamente.
 */
function mergeSortAlphabetic($array) {
    // Caso base: Si el arreglo tiene 1 o 0 elementos, ya está ordenado.
    if (count($array) <= 1) {
        return $array;
    }

    // Dividir el arreglo en dos mitades
    $middle = floor(count($array) / 2);
    $left = mergeSortAlphabetic(array_slice($array, 0, $middle)); // Lado izquierdo
    $right = mergeSortAlphabetic(array_slice($array, $middle));  // Lado derecho

    // Combinar las mitades ordenadas
    return merge($left, $right);
}

/**
 * Combina dos arreglos ordenados en uno solo, preservando el orden.
 * 
 * $left Arreglo ordenado (mitad izquierda).
 * $right Arreglo ordenado (mitad derecha).
 * Arreglo combinado y ordenado.
 */
function merge($left, $right) {
    $result = []; // Arreglo resultado
    $i = 0;      // Índice para el arreglo izquierdo
    $j = 0;      // Índice para el arreglo derecho

    // Combinar elementos de los dos arreglos
    while ($i < count($left) && $j < count($right)) {
        // Comparar elementos (ignorando mayúsculas y minúsculas)
        if (strcasecmp($left[$i], $right[$j]) <= 0) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    // Añadir los elementos restantes del arreglo izquierdo, si los hay
    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    // Añadir los elementos restantes del arreglo derecho, si los hay
    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

// Definición de la lista de palabras a ordenar
$list2 = array("Zebra", "Apple", "Mango", "Banana", "Lemon");

// Mostrar la lista original
echo "Lista original: ";
foreach ($list2 as $item) {
    echo "$item, ";
}
echo PHP_EOL; // Salto de línea

// Ordenar la lista utilizando Merge Sort
$list2 = mergeSortAlphabetic($list2);

// Mostrar la lista ordenada
echo "Lista ordenada: ";
foreach ($list2 as $item) {
    echo "$item, ";
}
?>
