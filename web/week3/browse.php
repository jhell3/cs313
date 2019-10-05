<?php
    session_start();

    $_SESSION["y"] = 3;
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
        <title>I Hate My Friend</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>
    <body method="post" action="cartpage.php">
    <h1>I Hate My Friend.</h1>
    <h3><a href="cart.php"> View Cart </a></h3>


<!-- "items" = array("Poop on a Stick" => 12.01,
                                     "Fart Gun" => 122.32,
                            "Pooperi, \"TacoBell\"" => 13.21,
                            "Dog Breath Spray" => 15.00,
                            "Moldy Sausage" => 2.13,
                            "Laughing Lamas" => 5.22,
                            "Grandma's Leftover Dinner....Dentures possibly included" => 3.99); -->                            <div id="cart"></div>
        <form>
        <table id="myTable">
            <tr>
                <th>Objects of Prank War</th>
                <th>Prices</th>
                <th>Quantity</th>
                <th>Add to Cart</th>

            </tr>
            <?php
                for($x = 0; $x < 7; $x++){
                    echo"<tr>
                        <td id=\"item[$x]\">" . $_SESSION["cart"][$x][0] . "</td>
                        <td id=\"price[$x]\">" . $_SESSION["cart"][$x][1] . "</td>
                        <td id=\"quantity[$x]\">" . $_SESSION["cart"][$x][2] . "</td>
                        <td><input type=\"number\" placeholder=\"0\"></input></td></tr>";
                }

                
                

        /*    $i = 0;
            foreach($items as $x => $x_value){
               
                echo "<tr> 
                        <td>" . $x . "</td> 
                        <td>" . $x_value . "</td> 
                        <td><button class=\"addCart\"
                        data-name=\"$i\"
                        data-price=\"$x_value\"
                        type=\"submit\">
                        ADD To Cart
                </button></td>" . 
                     //  <td><button id= \"b[$x]\"> Add to Cart </button></td>
                    "</tr>";
            $i += 1; 

            <button class=\"addCart\"
                        id=\"item[$x]\"
                        type=\"submit\"
                        onClick=\"\">
                        ADD To Cart
                        </button>
            } */
         ?>     
    <input type="submit">
</form>
        <script>
            

        </script>
         
    </body>
</html>

