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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="week5.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <h3><a href="index5.php">Return Home</a></h3>
    <form action="info.php" method="GET">
            <p>Search by Pokedex number<input name="pokedex"><button type="submit">Search</button></p>
    </form>
    <form action="insert.php" method="POST">
    <form>


        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name">Pokemon Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type"  required>
            </div>  
            
            <div class="form-row">
                <div class="col">
                    <label for="hp">HP</label>
                    <input type="text" class="form-control" name="hp" required>
                </div>
                <div class="col">
                    <label for="attack">Attack</label>
                    <input type="text" class="form-control" name="attack" required>
                </div>
                <div class="col">
                    <label for="defense">Defense</label>
                    <input type="text" class="form-control" name="defense" Defenseed>
                </div>
                <div class="col">
                    <label for="sp_attack">Special Attack</label>
                    <input type="text" class="form-control" name="sp_attack" required>
                </div>
                <div class="col">
                    <label for="sp_defense">Special Defense</label>
                    <input type="text" class="form-control" name="sp_defense" required>
                </div>
                <div class="col">
                    <label for="speed">Speed</label>
                    <input type="text" class="form-control" name="speed" required>
                </div>
            </div>
        </div>
            
        <button class="btn btn-primary" type="submit">Submit form</button>
</form>

    </form> 