<?php

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GET') {

    include_once('db_connection.php');
    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $id = $data->Identification;

    //ejecución de la consulta en la base de datos
    $sql = "SELECT * FROM users WHERE Identification='{$id}'";
    $result = $conn->query($sql);

    // Se crea la variable para verificar si la identificación corresponde    
    $userID = array();
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {


            $userID[] = $row;
        }


        echo json_encode(array('res' => array('success' => true, 'data' =>array(), 'error' => array('Title' => '', 'message' => ''))));
    } else {
        echo json_encode(array('success' => false, 'data' => array(), 'error' => array('Title' => '', 'message' => '')));
    }
} else {
    echo json_encode(array('success' => '', 'data' => array(), 'error' => array('Title' => 'Request method', 'message' => 'Wrong request')));
}
