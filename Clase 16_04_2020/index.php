<?php include_once('layouts/header.php'); ?>

<table class="table table-bordered table-hover mt-5 text-center">

    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Task</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>

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

                    echo "<tr>
                
                <td>{$row['Id']}</td>
                <td>{$row['task']}</td>
                <td>{$row['date']}</td>
                               
                </tr>";
                }
            }
        } catch (Exception $ex) {

            echo $ex;
        }

        ?>

    </tbody>

</table>

<?php include_once('layouts/footer.php'); ?>