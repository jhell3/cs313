<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Scripture Resources</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <h1> Scripture Resources</h1>

    <form action="">
      <input type="text" id="book" placeholder="Book" name="book"></input>
      <button id="btn">SEARCH</button>
    </form>
    <div id="response"></div>


<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}


foreach ($db->query('SELECT * FROM scriptures') as $row)
{
  echo "<p><b>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</b> - \"" . $row['content'] . "\"";
  echo '<br/></p>';
}
?>

<script>
$(document).ready(function(){
  $("#btn").click(function(){
    $('#response').load('getBook.php?book=' + $('#book').val());
  });
});
</script>

  </body>
</html>
