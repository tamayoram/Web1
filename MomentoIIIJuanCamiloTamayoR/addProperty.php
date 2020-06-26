<?php
$method=$_SERVER['REQUEST_METHOD']; 
if($method==='POST'){ 

    include_once('db_connection.php');

    $request=file_get_contents('php://input'); 
    $data=json_decode($request); 

    $userId=$data->UserIdentification;
    $title=$data->Title;
    $type=$data->Type;
    $address=$data->Address;
    $room=$data->Room;
    $price=$data->Price;
    $area=$data->Area;

    

    $sql="INSERT INTO assets (UserIdentification,Title,Type,Address,Rooms,Price,Area) VALUES ('{$userId}','{$title}','{$type}','{$address}','{$room}','{$price}','{$area}')";  
    $result=$conn->query($sql); 

    echo json_encode(array('success' => true, 'data' => array("UserIdentification" => $userId, "Title" => $title, "Type" => $type, "Address" => $address, "Room" => $room, "Price" => $price),"Area"=>$area, 'error' => array('Title' => '', 'message' => '')));

}    
        
    else{

        echo json_encode(array('success' => '', 'data' => array(), 'error' => array('Title' => 'Request method', 'message' => 'Wrong request')));
    }
