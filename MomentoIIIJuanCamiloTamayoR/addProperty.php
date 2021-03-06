<?php
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {

    include_once('db_connection.php');

    $request = file_get_contents('php://input');
    $data = json_decode($request);

    $userId = $data->UserIdentification;
    $title = $data->Title;
    $type = $data->Type;
    $address = $data->Address;
    $room = $data->Rooms;
    $price = $data->Price;
    $area = $data->Area;

    if ($userId == "" || $title == "" || $type == "" || $address == "" || $room == "" || $price == "" || $area == "") {

        echo json_encode(array('res' => array('success' => false, 'data' => array(), 'error' => array('Title' => 'Empty field', 'message' => 'The field is empty'))));
    } else {
        if (is_numeric($room) && is_numeric($price) && is_numeric($area)) {

            $sql = "INSERT INTO assets (UserIdentification,Title,Type,Address,Rooms,Price,Area) VALUES ('{$userId}','{$title}','{$type}','{$address}','{$room}','{$price}','{$area}')";
            $result = $conn->query($sql);

            echo json_encode(array('res' => array('success' => true, 'data' => array("UserIdentification" => $userId, "Title" => $title, "Type" => $type, "Address" => $address, "Room" => $room, "Price" => $price, "Area" => $area), 'error' => array('Title' => '', 'message' => ''))));
        } else {
            echo json_encode(array('res' => array('success' => false, 'data' => array(), 'error' => array('Title' => 'Non-numeric field', 'message' => 'The fields must be numeric'))));
        }
    }
} else {

    echo json_encode(array('res' => array('success' => false, 'data' => array(), 'error' => array('Title' => 'Request method', 'message' => 'Wrong request'))));
}
