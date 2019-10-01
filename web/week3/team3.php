<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
 echo "<h1>Hello " . $_POST["name"] . "!</h1>\n" .
      "<h2>Your email is <a href=\"mailto:" . $_POST["email"] . "\">" . $_POST["email"] ."</a></h2>\n" .
      "<p>Your major is " . $_POST["major"] . ".</p>" .
      "<p> You said:<br>" . $_POST["comments"] . "</p>" ;
?>
   </body>
</html>
