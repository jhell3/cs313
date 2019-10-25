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
        <h3><a href="index5.php">Return Home</a></h3>
    <form action="info.php" method="GET">
            <p>Search by Pokedex number<input name="pokedex"><button type="submit">Search</button></p>
    </form>
    
    

    </body>
</html>