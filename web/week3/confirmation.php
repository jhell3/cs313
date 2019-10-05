<?php
    session_start();
    ?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Confirmation Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            for($x = 0; $x < 7; $x++){
                echo $_SESSION["cart"][$x][0] . " for: " . $_SESSION["cart"][$x][1];
            }

            echo "Deliver to: " . $_POST["address"] ;
        ?>
  
        
        <script src="" async defer></script>
    </body>
</html>