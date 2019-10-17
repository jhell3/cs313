<?php
  require "dbConnect.php";
 $db = get_db();
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <table>
            <tr>        
                <th>Pokedex</th>
                <th>Name</th>
                <th>Type</th>
            </tr>
                
        <?php
       
           $pokedex = $_GET['pokedex'];
           $statement = $db->prepare("SELECT * FROM pokemon");
           $statement->execute();
           while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
            if($row === $pokedex)
                    echo "<tr>
                        <td>" . $row['pokedex'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['type'] . "</td>
                    </tr>";
            }
            
            
            echo "</table>";
        ?>

        <table>
            <tr>
                <th>HP</th>
                <th>Attack</th>
                <th>Defense</th>
                <th>Sp. Attack</th>
                <th>Sp. Defense</th>
                <th>Speed</th>
            </tr>
        </table>
        <script src="" async defer></script>
    </body>
</html>