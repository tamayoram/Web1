<?php

print "Hola Mundo 3";
echo "<br>";
echo "Hola Mundo 4";

// para comentarios
// diferencia entre print y echo, es que este último permite imprimir varias mensaje en una sola línea

echo "<br>";
echo "Hola Mundo 4", "Hola mundo 5", " Hola mundo 6";

// variables

// las variables requieren del símbolo de peso

$nombre = "Camilo";

echo $nombre;

// en php no es necesario definir el tipo de variable al momento de su inicialización

echo "<br>";
$numero = 2;

echo "El número es $numero";

// La concatenación se realiza con .

echo "<br>";
echo "El número es " . $numero;

// definir constantes


echo "<br>";
define("curso", "php");
echo curso; // y después del define no es necesario usar el símbolo de $


