<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body method="post" action="team3.php" >
<h1>Student Info:</h1>

    <form action="team3.php" method="post">
      <input type="text" name="name" id="name" value="Joe" placeholder="Name">
      <br>
      <input type="text" name="email" id="email" value="hello@email.com" placeholder="example@email.com">
      <br>
      <h3>Choose major</h3>
  <?php
      $majors = array("cs"=>"Computer Science",
                      "wd" => "Web Design" ,
                      "cit"=>"Computer Information Technology",
                      "ce"=>"Computer Engineering");

      foreach($majors as $x => $x_value) {
        echo "<input type=\"radio\" name=\"major\" value=\"" . $x . "\"> " . $x_value . "</input>";
        echo "<br>";
      }
  ?>
      <br>
      <input type="text" name="comments" value="some comments" placeholder="Comments">Add a comment!</input>
      <br>
      <input type="checkbox" checked name="continent[]" value="North America">North America<br>
      <input type="checkbox" name="continent[]" value="South America">South America<br>
      <input type="checkbox" name="continent[]" value="Europe">Europe<br>
      <input type="checkbox" name="continent[]" value="Asia">Asia<br>
      <input type="checkbox" name="continent[]" value="Australia">Australia<br>
      <input type="checkbox" name="continent[]" value="Africa">Africa<br>
      <input type="checkbox" name="continent[]" value="Antartica">Antartica<br>

      <input type="submit" value="submit">

    </form>

  </body>
</html>
