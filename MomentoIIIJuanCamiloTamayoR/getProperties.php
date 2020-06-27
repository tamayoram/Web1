<?php

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GET') {

    include_once('db_connection.php');
    $request = file_get_contents('php://input');
    $data = json_decode($request);

    $userId = $data->UserIdentification;


    $sql = "SELECT * FROM assets WHERE UserIdentification='{$userId}'";
    $result = $conn->query($sql);

    $property = array();
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $property[] = $row;
        }

        echo json_encode(array('res'=>array('success' => true, 'data' => $property, 'error' => array('Title' => '', 'message' => ''))));
    }
} else {
    echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Request method', 'message' => 'Wrong request'))));
}
