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
        <link rel="stylesheet" href="assign3.css">
    </head>
    <body>
        <h1>Purchase Sucessful</h1>
        <h3>Item will be shipped in 2-143 business years.</h3>
        <?php
            
            for($x = 0; $x < 7; $x++){
                if($_SESSION["cart"][$x][2] > 0){
                    echo $_SESSION["cart"][$x][0] . " for: " . $_SESSION["cart"][$x][1] . "<br>";
                }
            }
            
            echo "Deliver to: " . $_POST["address"] ;
            session_destroy();
        ?>
  
        
        <script src="" async defer></script>
    </body>
</html>