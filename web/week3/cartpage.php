<?php
    session_start();

    
    if(empty($_SESSION["cart"])){
        $_SESSION["cart"]= array(
            array("Poop on a Stick", 12.01, 0),
            array("Fart Gun", 122.32, 0),
            array("Pooperi, \"TacoBell\"", 13.21, 0),
            array("Dog Breath Spray", 15.00, 0),
            array("Moldy Sausage", 2.13, 0),
            array("Laughing Lamas", 5.22, 0),
            array("Grandma's Leftover Dinner....Dentures possibly included", 3.99, 0)
        );
    }
    ?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assign3.css">
    </head>
    <body>
    <h1><a href="browse.php">I Hate My Friend.</a></h1>
        <?php
        echo "<table>
        <tr>
            <th>Objects of Prank War</th>
            <th>Prices</th>
            <th>Quantity in Cart</th>
            <th>Increase/Decrease Quantity</th>

        </tr>
        <tr>";
            $y = 0; 
            for($x = 0; $x < 7; $x++){
                
             //   echo $_POST["item[$x]"];
                if($_POST["item$x"] != 0){
                    $_SESSION["cart"][$x][2] += $_POST["item$x"];
                //    echo $_POST["item[$x]"];
               }
                if($_SESSION["cart"][$x][2] > 0){
                  /*  echo $_SESSION["cart"][$x][2] . " " . $_SESSION["cart"][$x][0] .
                     " for: " . $_SESSION["cart"][$x][1] . " each.";*/
                     echo 
                        "<td id=\"object[$x]\">" . $_SESSION["cart"][$x][0] . "</td>
                        <td id=\"price[$x]\">" . $_SESSION["cart"][$x][1] . "</td>
                        <td id=\"quantity[$x]\">" . $_SESSION["cart"][$x][2] . "</td>
                        <td><input type=\"number\" name=\"item$x\">
                        </input></td></tr>";
                    $y++; 
                    echo "<br>";
                }
            }
            if($y == 0){
                echo "Your cart is empty, Click on the name of the website to return.";
            }
            else{
                echo "<a href=\"checkout.php\">Check Out</a>";
            }
        
        ?>
        
        
        <script src="" async defer></script>
    </body>
</html>