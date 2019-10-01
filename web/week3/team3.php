<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$str = "<h1>Hello " . $_POST["name"] . "!</h1>\n" .
      "<h2>Your email is <a href=\"mailto:" . $_POST["email"] . "\">" . $_POST["email"] ."</a></h2>\n" .
      "<p>Your major is " . $_POST["major"] . ".</p>" .
      "<p> You said:<br>" . $_POST["comments"] . "</p>" .
      "<p> You have visited:<br>";

$continent = $_POST['continent'];
if(empty($continent)) {
  $str .= "<p>Welcome to Earth. You haven't visited anywhere.</p>";
}
else {
   $str .= "<ul>\n";
   foreach ($continent as $value) {
      $str .= "<li>" . $value . "</li>\n";
   }
   $str .= "</ul>";
}
?>
   </body>
</html>
