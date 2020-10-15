<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - Performing for loops</title>
  </head>
  <body>
    <?php
      #write traditional greatings;
      echo '<h1>Performing for loops</h1>';
      for($i=1; $i<4; $i++){
        echo "<dt>Outer loop iteration $i";
        #nested loop to go here
        for($j=1; $j<4; $j++){
          echo "<dd>Inner loop iteration $j";
        }
      }
    ?>

  </body>
</html>
