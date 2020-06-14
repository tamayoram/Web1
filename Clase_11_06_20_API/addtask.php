<?php
$method=$_SERVER['REQUEST_METHOD']; // se verifica por que método se esta realizando la consulta
if($method==='POST'){ // se utiliza post por que queremos agregar información a la base de datos

    include_once('db_connection.php');// llamado a la conexión

    $request=file_get_contents('php://input'); //instrucción para recibir los datos en json
    $data=json_decode($request);//instrucción para convertir los datos que vienen en json a un formato que entiende php que es de arreglo asociativo.
    //var_dump($data); // instrucción para visualizar datos y probar como funciona el archivo en insomnia.

    $task=$data->task; // se saca en la variable $task la consulta que viene en data para task
    $date=$data->date;

    $sql="INSERT INTO tasks (task,date) VALUES ('{$task}','{$date}')"; // instrucción sql para incluir registros en la base de datos
    $result=$conn->query($sql); // se activa la conexión $conn y se ejecutar el query $sql

    echo json_encode(array('response'=>'Task added successfully.'));// se le da respuesta en formato json al usuario. Siempre hay que dar una respuesta ojo. 

    //$sql="SELECT * FROM tasks"; // instrucción sql para consultar los registros de la tabla tasks
    //$result=$conn->query($sql); // se ejecuta la consulta

} 
