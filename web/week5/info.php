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
        <link rel="stylesheet" href="week5.css">
    </head>
    <body>
        <h3><a href="index5.php">Return Home</a></h3>
    <form action="info.php" method="GET">
            <p>Search by Pokedex number<input name="pokedex"><button type="submit">Search</button></p>
</form>
                
        <?php
       
           $pokedex = $_GET['pokedex'];
           $statement = $db->prepare("SELECT * FROM pokemon where pokedex = $pokedex");
           $statement->execute();
           while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                    $pokedex = $row['pokedex'];
                    $name =  $row['name'];
                    $type =  $row['type'];
            }
            echo "<h1> $name</h1>
            <br> <h2>Pokedex Number: $pokedex    Pokemon Type: $type";
            
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
                <?php
                $pokedex = $_GET['pokedex'];
                $statement = $db->prepare("SELECT * FROM stats where id = $pokedex");
                $statement->execute();
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                         echo "<tr>
                             <td>" . $row['hp'] . "</td>
                             <td>" . $row['attack'] . "</td>
                             <td>" . $row['defense'] . "</td>
                             <td>" . $row['sp_attack'] . "</td>
                             <td>" . $row['sp_defense'] . "</td>
                             <td>" . $row['speed'] . "</td>
                         </tr>";
                 }
                 echo "</table>";
                ?>
            
    
        <script src="" async defer></script>
    </body>
</html>