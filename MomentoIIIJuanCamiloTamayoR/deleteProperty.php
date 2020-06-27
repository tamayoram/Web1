<?php
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'DELETE') {

    include_once('db_connection.php');

    $request = file_get_contents('php://input');
    $data = json_decode($request);

    $assetId = $data->AssetID;

    $sql = "DELETE FROM assets WHERE AssetID='{$assetId}'";
    $result = $conn->query($sql);

    echo json_encode(array('res'=>array('success' => true, 'data' => array(), 'error' => array('Title' => '', 'message' => ''))));
} else {

    echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Request method', 'message' => 'Wrong request'))));
}
