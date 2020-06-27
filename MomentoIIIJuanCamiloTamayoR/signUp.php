<?php

//Función para la validación de caracteres especiales
$myArray = array('!', '@', '#', '$', '%', '&', '?', '¿', '¡');

function validation($variable, $specialCharacters)
{
    $count = 0;

    for ($x = 0; $x < strlen($variable); $x++) {

        for ($y = 0; $y < count($specialCharacters); $y++) {

            if ($variable[$x] == $specialCharacters[$y]) {
                $count = $count + 1;
            }
        }
    }

    return $count;
}

// Código para realizar el SignUp en la base de datos
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {

    include_once('db_connection.php');

    $request = file_get_contents('php://input');
    $data = json_decode($request);

    // Verificación que los campos existan
    if (isset($data->Name) && isset($data->Lastname) && isset($data->Email) && isset($data->Type_id) && isset($data->Identification) && isset($data->Password)) {

        $name = $data->Name;
        $lastname = $data->Lastname;
        $email = $data->Email;
        $typeid = $data->Type_id;
        $id = $data->Identification;
        $password = $data->Password;

        //Verificación que los campos no sean vacíos 
        if ($name == "" || $lastname == "" || $email == "" || $typeid == "" || $id == "" || $password == "") {

            echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Empty field', 'message' => 'The field is empty'))));
        } else {

            //Verificación del tamaño de los campos name y lastname
            if (strlen($name) > 40 || strlen($lastname) > 40) {

                echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Excess characters', 'message' => 'The number of characters is over 40'))));
            } else {

                //Verificación de caracteres especiales en los campos name y lastname
                if (validation($name, $myArray) != 0 || validation($lastname, $myArray) != 0) {

                    echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Special characters', 'message' => 'Invalid character'))));
                } else {

                    $myArray = array('@');

//verificación que el email tenga el signo de @
                    if (validation($email, $myArray) == 0) {

                        echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Email format', 'message' => 'Email invalid format'))));
                    } else {

                        $shortEmail = substr($email, -4);

//verificación que el email tenga el .com o el .net
                        if ($shortEmail == '.com' || $shortEmail == '.net') {

                            $myArray = array('!', '@', '#', '$', '%', '&', '?', '¿', '¡', '*');

                            //verificación que se cumplan las validaciones del password

                            if (strlen($password) >= 8 && strlen($password) <= 16 && validation($password, $myArray) >= 2) {

                             
                             //verificación de el type id y el identification
                                if ($typeid = 'Pas') {

                                    if (strlen($id) <= 10) {

                                        $sql = "INSERT INTO users (Type_id,Identification,Name,Lastname,Email,Password) VALUES ('{$typeid}','{$id}','{$name}','{$lastname}','{$email}','{$password}')";

                                        $result = $conn->query($sql);

                                        echo json_encode(array('res'=>array('success' => true, 'data' => array("Type_id" => $typeid, "Identification" => $id, "Name" => $name, "Lastname" => $lastname, "Email" => $email, "Password" => $password), 'error' => array('Title' => '', 'message' => ''))));
                                    } else {

                                        echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Identification format', 'message' => 'Identification invalid format'))));
                                    }
                                } else if ($typeid = 'CC') {

                                    if (is_numeric($id)) {


                                        $sql = "INSERT INTO users (Type_id,Identification,Name,Lastname,Email,Password) VALUES ('{$typeid}','{$id}','{$name}','{$lastname}','{$email}','{$password}')";

                                        $result = $conn->query($sql);

                                        echo json_encode(array('res'=>array('success' => true, 'data' => array("Type_id" => $typeid, "Identification" => $id, "Name" => $name, "Lastname" => $lastname, "Email" => $email, "Password" => $password), 'error' => array('Title' => '', 'message' => ''))));
                                    } else {

                                        echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Identification format', 'message' => 'Identification invalid format'))));
                                    }
                                } else {

                                    echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Identification format', 'message' => 'Identification invalid format'))));
                                }
                            } else {

                                echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Password format', 'message' => 'Password invalid format'))));
                            }
                        } else {


                            echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Email format', 'message' => 'Email invalid format'))));
                        }
                    }
                }
            }
        }
    } else {

        echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Non existent field', 'message' => 'Field does not exist'))));
    }
} else {

    echo json_encode(array('res'=>array('success' => false, 'data' => array(), 'error' => array('Title' => 'Request method', 'message' => 'Wrong request'))));
}
