<?php
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {

    include_once('db_connection.php');

    $request = file_get_contents('php://input');
    $data = json_decode($request);


    if (isset($data->Name) && isset($data->Lastname) && isset($data->Email) && isset($data->Type_id) && isset($data->Identification) && isset($data->Password)) {

        $name= $data->Name;
        $lastname= $data->Lastname;
        $email= $data->Email;
        $typeid= $data->Type_id;
        $iden= $data->Identification;
        $password= $data->Password;

        //echo $iden;
        
        if ($name == "" || $lastname == "" || $email == "" || $typeid == "" || $iden = "" || $password == "") {


            echo json_encode(array('success' => false, 'data' => array(), 'error' => array('Title' => 'Empty field', 'message' => 'The field is empty')));
        } else {


            if (strlen($name) > 40 || strlen($lastname) > 40) {

                echo json_encode(array('success' => false, 'data' => array(), 'error' => array('Title' => 'Excess characters', 'message' => 'The number of characters is over 40')));
            } else {

                
                
                $sql = "INSERT INTO users (Type_id,Identification,Name,Lastname,Email,Password) VALUES ('{$typeid}','{$iden}','{$name}','{$lastname}','{$email}','{$password}')";
                
                $result = $conn->query($sql);

                echo json_encode(array('success' => true, 'data' => array("Type_id"=>$typeid,"Identification"=>$iden,"Name"=>$name,"Lastname"=>$lastname,"Email"=>$email,"Password"=>$password), 'error' => array('Title' => '', 'message' => '')));
            }
        }
    } else {

        echo json_encode(array('success' => false, 'data' => array(), 'error' => array('Title' => 'Non existent field', 'message' => 'Field does not exist')));
    }
}
