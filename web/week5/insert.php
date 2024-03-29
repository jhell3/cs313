<?php
  require("dbConnect.php");
 $db = get_db();
        $inject = $_POST['inject'];
        $pokedex = $_POST['pokedex'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $hp = $_POST['hp'];
        $attack = $_POST['attack'];
        $defense = $_POST['defense'];
        $sp_attack = $_POST['sp_attack'];
        $sp_defense = $_POST['sp_defense'];
        $speed = $_POST['speed'];
        $evo_num = $_POST['evo_num'];
        $evo_at = $_POST['evo_at'];

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

        if($inject == Add){
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
                $statement->bindValue(':evolution_num', $evo_num);
                $statement->bindValue(':evolve_at', $evo_at);
                $statement->execute();
            }
            catch (Exception $ex)
            {
                echo "Error with DB. Details 3: $ex";
                die();
            }

        }
        
        if($inject == delete){
            try
            {
                $query = "DELETE FROM stats WHERE id = $pokedex";
                $statement = $db->prepare($query);
                $statement->execute();
            }
            catch (Exception $ex)
            {
                echo "Error with DB. Details 1: $ex";
                die();
            }
            try
            {
                $query = "DELETE FROM evolution WHERE id = $pokedex";
                $statement = $db->prepare($query);
                $statement->execute();
            }
            catch (Exception $ex)
            {
                echo "Error with DB. Details 1: $ex";
                die();
            }
            try
            {
                $query = "DELETE FROM pokemon WHERE pokedex = $pokedex";
                $statement = $db->prepare($query);
                $statement->execute();
            }
            catch (Exception $ex)
            {
                echo "Error with DB. Details 1: $ex";
                die();
            }
        }

        header("Location: addpokemon.php");
        die();
    ?>

    </body>
</html>