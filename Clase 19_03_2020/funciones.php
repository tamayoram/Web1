<?php

$nombre="Camilo";

function estudiante ($nombre)
{

    echo "Nuevo estudiante $nombre";
}

// se puede utilizar con variables definidas previamente

estudiante($nombre);
echo "<br>";

// se puede utilizar con nombres directamente en el parámetro

estudiante("Andres");

function invitado (
    $nombre,
    $apellido,
    $edad)
{

    echo "El invitado de nombre $nombre con apellido $apellido es mayor edad, tiene $edad años";
}

echo "<br>";
echo "<br>";
invitado("Daniela","Perez",24);

// Función numérica

function suma ($a,$b)
{

    $resultado=$a+$b;
    echo "El resultado de la suma es $resultado";
}

echo "<br>";
echo "<br>";
suma(10,20);

//Función con return

function multiplicacion ($a,$b)
{

    return $a*$b;
    
}

echo "<br>";
echo "<br>";
$resul_multiplica=multiplicacion(10,20);
echo "El resultado de la multiplicación es $resul_multiplica";


?>