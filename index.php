<?php
/**
 * Práctica GARRIDO PHP Script
 *
 * Este script contiene funciones para demostrar el uso de DocBlocks y la generación de documentación.
 *
 * @author Garrido
 * @version 1.0
 */

/**
 * Calcula la suma de dos números.
 *
 * Esta función toma dos números enteros como parámetros y devuelve su suma.
 *
 * @param int $a El primer número a sumar.
 * @param int $b El segundo número a sumar.
 * @param int $c Otro número más.
 * @return int La suma de $a y $b.
 */
function sumar($a, $b, $c) {
    return $a + $b +$c;
}

/**
 * Determina si un número es par o impar.
 *
 * Esta función toma un número entero como parámetro y devuelve una cadena indicando si es par o impar.
 *
 * @param int $numero El número a evaluar.
 * @return string 'Par' si $numero es par, 'Impar' si es impar.
 * @internal Esta anotación solo será visible en la documentación para desarrolladores.
 */
function esPar($numero) {
    return ($numero % 2 === 0) ? 'Par' : 'Impar';
}

// Ejemplo de uso de las funciones
echo "La suma de 4 y 5 es: " . sumar(4, 5) . " y "; // Salida: La suma de 4 y 5 es: 9

echo "El número 7 es: " . esPar(7); // Salida: El número 7 es: Impar
?>