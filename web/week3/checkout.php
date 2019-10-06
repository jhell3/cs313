<?php
    session_start();
    ?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Checkout</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assign3.css">
    </head>
    <body method="post" action="confirmation.php">
   
   <?php
            
            $y = 0;
            for($x = 0; $x < 7; $x++){
                if($_SESSION["cart"][$x][2] > 0){
                    echo $_SESSION["cart"][$x][0] . " for: " . $_SESSION["cart"][$x][1] . "<br>";
                    $y++;

                }
            }
            if($y == 0){
                echo "Your cart is empty, Click on the name of the website to return.";
            }
        ?>
        <form action="confirmation.php" method="post">
        <div>
            <p> Enter your address <input name="address" type="text"></p>
            <input type="submit" value="submit">
        </div>
        </form>
        <script src="" async defer></script>
    </body>
</html>