<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap components</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">

            <?php
            $oscuro="Tarjetas negras";
            $juego1="Juego número 1";
            $Mensaje1="Corresponde al primer equipo de jugadores";
            $card = "<div class='col-sm'>
                <div class='card text-white bg-dark mb-3' style='max-width: 18rem;'>
                    <div class='card-header'>$oscuro</div>
                    <div class='card-body'>
                        <h5 class='card-title'>$juego1</h5>
                        <p class='card-text'>$Mensaje1</p>
                    </div>
                </div>
            </div>";

            for ($i = 0; $i < 6; $i++) {
                echo $card;
            }
            ?>
        </div>

        <div class="row">

            <?php
            $claras="Tarjetas claras";
            $juego2="Juego número 2";
            $Mensaje2="Corresponde al segundo equipo de jugadores";
            $card = "<div class='col-sm'>
                <div class='card bg-light mb-3' style='max-width: 18rem;'>
                    <div class='card-header'>$claras</div>
                    <div class='card-body'>
                        <h5 class='card-title'>$juego2</h5>
                        <p class='card-text'>$Mensaje2</p>
                    </div>
                </div>
            </div>";

            for ($i = 0; $i < 6; $i++) {
                echo $card;
            }
            ?>



        </div>
    </div>










    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>
</body>

</html>