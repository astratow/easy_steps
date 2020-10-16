<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - Breaking from loops </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      echo '<h1>Breaking from loops </h1>';
      for($i=1; $i<4; $i++){
        for($j=1; $j<4; $j++){
          echo "<h4>Running i=$i and j=$j</h4>";
          }
      }
    ?>

  </body>
</html>
