<?php
// ciclos
$numero=1;

while ($numero <= 10) {
    
echo $numero;

// establecer siempre una condición que permita finalizar el ciclo.
$numero=$numero+1;

}

$numero=1;

do {
    
    echo "<br>";
    echo $numero;
    $numero=$numero+2;

} while ($numero<= 10);


$numero=1;
$veces=6;

for ($numero=1; $numero <= $veces; $numero++) { 
    
    echo "<br>";
    echo $numero;
}



?>