
<?php

// arreglo, array, vector. Estructura de datos que contiene una lista de elementos. Siempre inician en la posición cero.

$dias=array("Lunes<br>","Martes<br>","Miércoles<br>","Jueves<br>");

// muestra la variable, su tipo y el número de caracteres.
var_dump($dias);

echo "<br>";
echo "<br>";

// print_r es para mirar el elemento y la posición
print_r($dias);

echo "<br>";
echo "<br>";

// array asociativo. Dentro del array se debe decir el nombre de la variable y lo que va a contener.
$estudiante = array("nombre" => "Camilo", "apellido"=>"Tamayo","edad"=>37);

print_r($estudiante);


// se puede llamar el nombre de la variable. Para hacerlo es necesario usar corchete y entre comillas el nombre de esa variable. 

echo "Mi nombre es ".$estudiante["nombre"];
echo "Mi edad es ".$estudiante["edad"];

echo "<br>";
echo "<br>";
$persona=$arrayName = array("Camilo","Tamayo",37);

print_r($persona);

// En este caso como no es un array asociativo para llamarlo debo utilizar la posición de los datos que quiero llamar.

echo "Mi nombre es ".$persona[0]." ".$persona[1];







?>