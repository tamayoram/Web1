
<?php

if (isset($_GET['Id'])){
include_once('db_connection.php');



$Id=$_GET['Id'];
$sql="DELETE FROM tasks WHERE Id={$Id}";
$result=$conn->query($sql);
header("location: index.php");

}

?>