<?php

$amigos=array("jose","maria","raul","sara","pedro","camila","luis","david");

//función chunk. La función sirve para dividir el array en pedazos y forma un array con arrays adentro de acuerdo a los pedazos.

print_r($amigos);
echo "<br>";
echo "<br>";

// en este caso se crean dos vectores cada un con cuatro elementos.

$funcion_chunk=array_chunk($amigos,4);
print_r($funcion_chunk);

// función slice. Sirve para eliminar porciones de un array. En el caso de abajo, solo deja en el array lo que hay de la posición 4 en adelante

echo "<br>";
echo "<br>";
$funcion_slice=array_slice($amigos,4);
print_r($funcion_slice);

//función merge. Se utiliza para unir arrays.

$compañeros=array("Camilo","Paula");

$funcion_merge=array_merge($amigos,$compañeros);

echo "<br>";
echo "<br>";
print_r($funcion_merge);

//array pop. Eliminar el último elemento.

$funcion_pop=array_pop($amigos);
echo "<br>";
print_r($funcion_pop);
echo "<br>";
print_r($amigos);

//función buscar

$funcion_buscar=array_search("raul",$amigos);
echo "<br>";
print_r($funcion_buscar);

echo "<br>";
echo array_search("sara",$amigos);

// invertir el array

echo "<br>";
echo "<br>";
$reves= array_reverse($amigos);
print_r($reves);




?>