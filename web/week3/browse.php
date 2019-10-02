<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>I Hate My Friend</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h1>I Hate My Friend.</h1>
        <?php
            $items = array("Poop on a Stick" => 12.01,
                            "Fart Gun" => 122.32,
                            "Pooperi, \"TacoBell\"" => 13.21,
                            "Dog Breath Spray" => 15.00,
                            "Moldy Sausage" => 2.13,
                            "Laughing Lamas" => 5.22,
                            "Grandma's Leftover Dinner....Dentures possibly included" => 3.99);
        ?>

        <table>
            <tr>
                <th>Objects of Prank War</th>
                <th>Prices</th>
                <th>Add to Cart</th>
            </tr>
        <?php
            foreach($items as $x => $x_value){
                echo "<tr> 
                        <td>" . $x . "</td> 
                        <td>" . $x_value . "</td> 
                        <td><button> Add to Cart </button></td>
                    </tr>";
            }
         ?>

        
        <script src="" async defer></script>
    </body>
</html>