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
        <?php
            foreach ($db->query('SELECT * FROM pokemon') as $row){
                echo $row[pokedex] . "test" . $row[name];
            }
        ?>

        <script src="" async defer></script>
    </body>
</html>