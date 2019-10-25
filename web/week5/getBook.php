<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Scripture Details</title>
  </head>
  <body>
<?php
// echo "<p>here</p>";
$book = $_GET['book'];
$chapter = $_GET['chapter'];
// print "<p>" . "SELECT * FROM scriptures WHERE book = '$book';" ."</p>";
try {
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
catch (PDOException $ex) {
  echo 'Error!: ' . $ex->getMessage();
  die();
}

$str = "";
try {
  foreach ($db->query("SELECT * FROM TEAM_ACT.scriptures WHERE book = '$book' AND chapter = '$chapter';") as $row) {
    $str .= "<h1>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</h1>";
    $str .= "<p>\"" . $row['content'] . "\"</p>";
  }
}
catch (PDOException $ex) {
  echo "<pre>ERROR: " . $ex->getMessage() . " \n\$book=$book</pre>";
  die();
}
echo $str . "<br>";


?>
  <p><a href="db.php">Return to Scripture Resources</a></p>


  </body>
</html>
