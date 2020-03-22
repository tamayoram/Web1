<?php

// variables globales. Una variable que siempre esta disponible.

// $GLOBALS siempre esta disponible en cualquier parte del código.

$n1=6;
$n2=4;

function suma()
{

$GLOBALS["s"]=$GLOBALS["n1"]+$GLOBALS["n2"];


}

suma();
echo $s;

//$_SERVER conocer en donde se encuentra el archivo

echo "<br>";
echo $_SERVER["PHP_SELF"]; //Dirección del archivo
echo "<br>";
echo $_SERVER["SERVER_NAME"]; // Dirección del servidor
echo "<br>";
//echo $_SERVER["HTTP_REFERER"]; //Dirección http

//$_GET

// correponde al name de input box del formulario
$numero=$_GET["numero"];
echo "El numero es: ".$numero;



?>