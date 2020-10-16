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
          if($i==1 && $j==1){
            echo "<p>Continues inner loop  when i=$i and j=$j</p>";
          }
          if($i==2 && $j==1){
            echo "<h3> Breaks inner loop when i=$i and j=$j</h3>";
          }
          echo "<h4>Running i=$i and j=$j</h4>";
          }
      }
    ?>

  </body>
</html>
