<?php

$server="localhost";
$user="root";
$password="";
$database="users";

$connection= new mysqli($server,$user,$password,$database); //crear un objeto de la clase mysqli que es para conexiones

// validación de la conexión

if($connection ->connect_error)
{
    die ($connection ->connect_error); // el die permite que si se presenta un error no continua la ejecución del código
}

//echo "Conexión realizada";

