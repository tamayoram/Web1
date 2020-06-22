<?php

$method=$_SERVER['REQUEST_METHOD']; // se verifica por que método se esta realizando la consulta
if($method==='GET'){ // se ejecuta si el método es get. Estamos llevando al usuario a utilizar get. Se utiliza get por que voy a obtener datos de la bd. 

    include_once('db_connection.php'); // conexión de la base de datos que esta en el archivo db_connection
    $request=file_get_contents('php://input'); //instrucción para recibir los datos en json
    $data=json_decode($request);
    $id=$data->Id;
    $sql="SELECT * FROM tasks WHERE Id={$id}"; // instrucción sql para consultar los registros de la tabla tasks
    $result=$conn->query($sql); // se ejecuta la consulta

    $oneTasks=array(); // creación de un vector vacío
    if($result->num_rows>0){ // se verifica si la consulta tiene registros

        //print_r($result->fetch_all()); // se utiliza fetch_all par devolver todos los campos de la consulta
        //print_r($result->fetch_assoc());

    while($row=$result->fetch_assoc()){ // se le asigna a la variable row cada fila de la consulta a la base de datos. Mientras exista filas el while será true y continua. 

        //print_r(array_values($row)[0]);
        //$oneTasks[]=$row; // se agrega cada línea de la consulta al vector task
        $oneTasks[]=$row; // instrucciónpara sacar el componente en la posición cero del array


     }

     //print_r($tasks); // se imprime en pantalla el arreglo asociativo (arreglo de arreglos)

   echo json_encode(array('response'=>'User found','state'=>true,'oneTasks'=>$oneTasks)); 
    // instrucción para imprimir en pantalla los campos que se leen de la base de datos pero en formato json. Se esta agregando un arreglo dentro de otro arreglo. Esto se hace para tener la opción de manejar en un mismo vector varias consultar a la base de datos.

    }
}
else{
    echo json_encode(array('response'=>'Bad request, try again'));
}