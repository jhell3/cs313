<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>I Hate My Friend</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="/simple_cart.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
                 crossorigin="anonymous">
        </script>
        <script src="/jQuery.SimpleCart.js" ></script>

    </head>
    <body>
    <h1>I Hate My Friend.</h1>
    <h3><a href="cart.php"> View Cart </a></h3>
        <?php
            $items = array("Poop on a Stick" => 12.01,
                            "Fart Gun" => 122.32,
                            "Pooperi, \"TacoBell\"" => 13.21,
                            "Dog Breath Spray" => 15.00,
                            "Moldy Sausage" => 2.13,
                            "Laughing Lamas" => 5.22,
                            "Grandma's Leftover Dinner....Dentures possibly included" => 3.99);
        ?>

<div id="cart"></div>

        <table>
            <tr>
                <th>Objects of Prank War</th>
                <th>Prices</th>
                <th>Add to Cart</th>
            </tr>
        <?php
            $i = 0;
            foreach($items as $x => $x_value){
               
                echo "<tr> 
                        <td>" . $x . "</td> 
                        <td>" . $x_value . "</td> 
                        <td><button id= \"b[$x]\"> Add to Cart </button></td>
                    </tr>";
            $i += 1;
            }
         ?>

        
        <script>
            $(document).ready(function () {
                $('#cart').simpleCart();
                });


        </script>
        
    </body>
</html>