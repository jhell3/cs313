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
        <link rel="stylesheet" href="general.css">
    </head>
    <body>
        <form action="info.php" method="GET">
            <p>Search by Pokedex number<input name="pokedex"><button type="submit">Search</button></p>
        <table>
            <tr>        
                <th>Pokedex</th>
                <th>Name</th>
                <th>type</th>
            </tr>
                
        <?php
        
            foreach ($db->query('SELECT * FROM pokemon') as $row){
                echo "<tr>
                        <td>" . $row['pokedex'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['type'] . "</td>
                    </tr>";
            }
            echo "</table>";
        ?>

        <script src="" async defer></script>
    </body>
</html>