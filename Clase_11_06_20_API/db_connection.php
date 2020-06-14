<?php

$host='localhost';
$username='root';
$password='';
$dbName='taskapp';
$conn=new mysqli($host,$username,$password,$dbName);

if($conn->connect_error){

    die($conn->connect_error);
}