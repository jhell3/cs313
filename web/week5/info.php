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
            <br> <h2>Pokedex Number: $pokedex 
            <br> Pokemon Type: $type</h2>";
            
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
                $statement2 = $db->prepare("SELECT * FROM stats where id = $pokedex");
                $statement2->execute();
                while ($row = $statement2->fetch(PDO::FETCH_ASSOC)){
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
                
                $statement3 = $db->prepare("SELECT * FROM evolution where id = $pokedex");
                $statement3->execute();
                while ($row = $statement3->fetch(PDO::FETCH_ASSOC)){
                    $evolution_num = $row['evolution_num'];
                    $evolve_at = $row['evolve_at'];
                }
                if($evolution_num == 1.3 ||$evolution_num == 1.2 ||$evolution_num == 2.3){
                    
                    $pokedex++;
                    $statement = $db->prepare("SELECT * FROM pokemon where pokedex = $pokedex");
                    $statement->execute();
                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                        $name2 =  $row['name'];
                    }
                    echo "$name evolves into $name2 at level $evolve_at<br>";
                    
                    if($evolution_num == 1.3){
                        $pokedex++;
                        $statement = $db->prepare("SELECT * FROM pokemon where pokedex = $pokedex");
                        $statement->execute();
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                            $name3 =  $row['name'];
                        }
                        $pokedex--;
                        $statement3 = $db->prepare("SELECT * FROM evolution where id = $pokedex");
                        $statement3->execute();
                        while ($row = $statement3->fetch(PDO::FETCH_ASSOC)){
                            $evolve_at2 = $row['evolve_at'];
                        }
                        echo "$name2 evolves into $name3 at level $evolve_at2";
                        
                    }
                    $pokedex--;
                }

                if($evolution_num == 2.2 || $evolution_num == 3.3 || $evolution_num == 2.3){
                    $pokedex--;
                    $statement = $db->prepare("SELECT * FROM pokemon where pokedex = $pokedex");
                    $statement->execute();
                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                        $name2 =  $row['name'];
                    }
                    $statement3 = $db->prepare("SELECT * FROM evolution where id = $pokedex");
                        $statement3->execute();
                        while ($row = $statement3->fetch(PDO::FETCH_ASSOC)){
                            $evolve_at2 = $row['evolve_at'];
                        }
                    echo "$name2 evolves into $name at level $evolve_at2<br>";
                    if($evolution_num == 3.3){
                        $pokedex--;
                        $statement = $db->prepare("SELECT * FROM pokemon where pokedex = $pokedex");
                        $statement->execute();
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
                            $name1 =  $row['name'];
                        }
                        $statement3 = $db->prepare("SELECT * FROM evolution where id = $pokedex");
                        $statement3->execute();
                        while ($row = $statement3->fetch(PDO::FETCH_ASSOC)){
                            $evolve_at1 = $row['evolve_at'];
                        }
                        $pokedex++;
                        echo "$name1 evolves into $name2 at level $evolve_at1<br>";
                    }
                    $pokedex++;
                }

                ?>

    
        <script src="" async defer></script>
    </body>
</html>