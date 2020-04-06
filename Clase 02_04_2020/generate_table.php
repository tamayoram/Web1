<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla para visualización de datos</title>

    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-bordered table-hover mt-5">
            
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>Nationality</th>
            </tr>
        </thead>
        <tbody>

            <?php

            function listUsers($connection)
            {

                $sql = "SELECT * from user";
                $result = $connection->query($sql);
                return $result;
            }

            try {
                require_once 'db_connection.php';

                $result = listUsers($connection);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        echo "<tr>
                
                <td>{$row['Id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['lastname']}</td>
                <td>{$row['age']}</td>
                <td>{$row['nationality']}</td>
                
                </tr>";
                    }
                }
            } catch (Exception $ex) {

                echo $ex;
            }

            ?>

        </tbody>

        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>