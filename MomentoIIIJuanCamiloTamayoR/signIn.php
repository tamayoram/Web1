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


    if ($result->num_rows > 0) {

        echo json_encode(array('res' => array('success' => true, 'data' => array(), 'error' => array('Title' => '', 'message' => ''))));
    } else {
        echo json_encode(array('success' => false, 'data' => array(), 'error' => array('Title' => 'Invalid user', 'message' => 'The user is not at the database')));
    }
} else {
    echo json_encode(array('res' => array('success' => false, 'data' => array(), 'error' => array('Title' => 'Request method', 'message' => 'Wrong request'))));
}
