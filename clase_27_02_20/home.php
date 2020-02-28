<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap components</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>
<body>
    <?php
    
        $Nombre="Camilo";
        $Mensaje= "Hola que hace";
        $cardTemplate="<div class='card' style='width: 18rem;'>
        
        <div class='card-body'>
          <h5 class='card-title'>$Nombre</h5>
          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class='list-group list-group-flush'>
          <li class='list-group-item'><strong>$Mensaje</strong></li>
          <li class='list-group-item'>Dapibus ac facilisis in</li>
          <li class='list-group-item'>Vestibulum at eros</li>
        </ul>
        <div class='card-body'>
          <a href='#' class='card-link'>Card link</a>
          <a href='#' class='card-link'>Another link</a>
        </div>
      </div>";
    

    for ($i=0;$i<7;$i++)
    {
        
        echo $cardTemplate;
    }

    ?>
</div>
    






 
 

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</body>
</html>