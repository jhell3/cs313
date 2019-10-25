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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <h3><a href="index5.php">Return Home</a><a href="addpokemon.php">Add another Pokemon</a></h3>
    <form action="info.php" method="GET">
            <p>Search by Pokedex number<input name="pokedex"><button type="submit">Search</button></p>
    </form>
    <?php
        $name = POST_["name"];
        $type = POST_["type"];
        $hp = POST_["hp"];
        $attack = POST_["attack"];
        $defense = POST_["defense"];
        $sp_attack = POST_["sp_attack"];
        $sp_defense = POST_["sp_defense"];
        $speed = POST_["speed"];
        $evo_num = POST_["evo_num"];
        $evo_at = POST_["evo_at"];

        echo $name;
        echo $type;
        echo $hp;
        echo $attack;
        echo $defense;
        echo $sp_attack;
        echo $sp_defense;
        echo $speed;
        echo $evo_num;
        echo $evo_at;

        try
        {
            $query = 'INSERT INTO pokemon(name, type) VALUES(:name, :type)';
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':type', $type);
            $statement->execute();
        }
        catch (Exception $ex)
        {
	        echo "Error with DB. Details 1: $ex";
	        die();
        }
        
        try
        {
            $query = 'INSERT INTO stats (hp, attack, defense, sp_attack, sp_defense, speed) VALUES(:hp, :attack, :defense, :sp_attack, :sp_defense, :speed)';
            $statement = $db->prepare($query);
            $statement->bindValue(':hp', $hp);
            $statement->bindValue(':attack', $attack);
            $statement->bindValue(':defense', $defense);
            $statement->bindValue(':sp_attack', $sp_attack);
            $statement->bindValue(':sp_defense', $sp_defense);
            $statement->bindValue(':speed', $speed);
            $statement->execute();
        }
        catch (Exception $ex)
        {
	        echo "Error with DB. Details 2: $ex";
	        die();
        }

        try
        {
            $query = 'INSERT INTO evolution(evolution_num, evolve_at) VALUES(:evolution_num, :evolve_at)';
            $statement = $db->prepare($query);
            $statement->bindValue(':evo_num', $evo_num);
            $statement->bindValue(':evo_at', $evo_at);
            $statement->execute();
        }
        catch (Exception $ex)
        {
	        echo "Error with DB. Details 3: $ex";
	        die();
        }
        header("Location: addpokemon.php?");
        die();

    ?>

    

    </body>
</html>