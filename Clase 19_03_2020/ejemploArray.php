<?php

$cursos = array("python", "java", "php", "html", "css");

echo $cursos[3];
echo "<br>";
print_r($cursos);

// cambiar el dato de una posición

echo "<br>";
$cursos[3] = "javascript";
echo $cursos[3];
echo "<br>";
print_r($cursos);

// crear datos nuevos

echo "<br>";
$cursos[5] = "C#";
echo $cursos[5];
echo "<br>";
print_r($cursos);

// función contar
echo "<br>";
echo count($cursos);

// visualizar los datos con el ciclo for

for ($i = 0; $i < count($cursos); $i++) {

    echo "<br>";
    echo $cursos[$i];
}

// combinando ciclo for y condicional if

echo "<br>";
for ($i = 0; $i < count($cursos); $i++) {

    echo "<br>";
    echo $cursos[$i];

    if ($cursos[$i] == "php") {
        echo  " es el curso que estamos estudiando este semestre";
    }
}

// posición basado en el conteo

   echo "<br>";
   echo "<br>";
   $posicion=count($cursos)-2;

   echo $cursos[$posicion];

   // funcion ordenar alfabeticamente ascendente
   echo "<br>";
   echo "<br>";
   asort($cursos);
   print_r($cursos);

   // funcion ordenar alfabeticamente descedente
   echo "<br>";
   echo "<br>";
   rsort($cursos);
   print_r($cursos);

   

