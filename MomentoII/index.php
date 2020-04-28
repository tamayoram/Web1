<?php include_once('layouts/header.php'); ?>

<?php

function listUsers($connection)
{

    $sql = "SELECT * from tasks";
    $result = $connection->query($sql);
    return $result;
}

try {
    require_once 'db_connection.php';

    $result = listUsers($conn);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            echo $card =
            
            "<div class='card-group'>
              <div class='card'>
             
                    <div class='card-body border border-dark m-5'>
                    
                        <h5 class='card-title'>Id: {$row['Id']}</h5>
                        <p class='card-text'>Task: {$row['task']}</p>
                        <p class='card-text'>Date: {$row['date']}</p>
                    
                        <a href='javascript:DeleteRegistry({$row['Id']})' class='btn btn-danger float-right'>Delete</a>
                        <a href='edit_task.php?Id={$row['Id']}' class='btn btn-dark float-right'>Edit</a> 
                    
                    </div>
                </div>
            </div>";


        }
    }
} catch (Exception $ex) {

    echo $ex;
}

?>


    <?php include_once('layouts/footer.php'); ?>