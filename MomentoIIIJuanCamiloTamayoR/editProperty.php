<?php
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'PUT') {

    include_once('db_connection.php');

    $request = file_get_contents('php://input');
    $data = json_decode($request);
    $assetId=$data->AssetID;
    $userId = $data->UserIdentification;
    $title = $data->Title;
    $type = $data->Type;
    $address = $data->Address;
    $room = $data->Rooms;
    $price = $data->Price;
    $area = $data->Area;

    if ($assetId=="" || $userId == "" || $title == "" || $type == "" || $address == "" || $room == "" || $price == "" || $area == "") {

        echo json_encode(array('res' => array('success' => false, 'data' => array(), 'error' => array('Title' => 'Empty field', 'message' => 'The field is empty'))));
    } else {

        if (is_numeric($room) && is_numeric($price) && is_numeric($area)) {

            $sql = "UPDATE assets SET UserIdentification='{$userId}', Title= '{$title}', Type= '{$type}',Address='{$address}',Rooms='{$room}',Price='{$price}',Area='{$area}' WHERE AssetID='{$assetId}'";
            $result = $conn->query($sql);

            echo json_encode(array('res' => array('success' => true, 'data' => array("AssetID"=>$assetId,"UserIdentification" => $userId, "Title" => $title, "Type" => $type, "Address" => $address, "Room" => $room, "Price" => $price, "Area" => $area), 'error' => array('Title' => '', 'message' => ''))));
        } else {
            echo json_encode(array('res' => array('success' => false, 'data' => array(), 'error' => array('Title' => 'Non-numeric field', 'message' => 'The fields must be numeric'))));
        }
    }
} else {
    echo json_encode(array('res' => array('success' => false, 'data' => array(), 'error' => array('Title' => 'Request method', 'message' => 'Wrong request'))));
}
