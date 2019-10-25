<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Scripture Resources</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
      // $(document).ready(function(){
      //   $("#btn").click(function(){
      //     $.ajax({
      //       type: "GET",
      //       url: "getBook.php",
      //       data: { book: $("#book") },
      //       error : function() {
      //         console.log('Error');
      //       },
      //       success: function(response) {
      //         $("#response").html(response);
      //       }
      //     });
      //   });
      // });
      // $(document).ready(function(){
      //   $("#btn").click(function(){
      //     $.get("getBook.php?book=" + $("#book").val(), function(data){
      //       $("#response").html(data);
      //     });
      //   });
      // });
      $(document).ready(function(){
        $("Button").click(function(){
          $("#response").load("/w05_TeamAct/getBook.php?book=" + $("#book").val());
        });
      });
    </script> -->
  </head>
  <body>
    <h1> Scripture Resources</h1>

    <!-- <form action>
      <input type="text" id="book" placeholder="Enter a Book" name="book" value="D&C"></input>
      <button id="btn">SEARCH</button>
    </form>
    <div id="response"></div> -->

<?php
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

  foreach ($db->query('SELECT * FROM TEAM_ACT.scriptures') as $row) {
    echo "<p><b><a href=\"getBook.php?book=" . $row['book'] . "&chapter=" . $row['chapter'] . "\">" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</a></b></p><br>";// - \"" . $row['content'] . "\"";
  }
?>
<form method="post" action="getBook.php">
  Book<insert type="text" name="book"></insert>
  chapter<insert type="number" name="chapter"></insert>
  verse<insert type="number" name="verse"></insert>
  content<insert type="text" name="content"></insert>
  <button type="submit">
  </form>

  </body>
</html>
