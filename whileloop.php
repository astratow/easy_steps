<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - While Loops </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      echo '<h1>While Loops </h1>';
      $numbers = array(10, 20, 30, 40, 50);
      echo  '<dt><h4>While Loop:</h4>';
      $i=0;
      while($i<5){
        echo "<dd>Element $i = $numbers[$i]";
        $i++;
      }
      echo '<dt> <h4>Do While Loop</h4>';
      $i=0;
      do
      {
        echo "<dd>Element $i=$numbers[$i]";
        $i++;
      }
      while($i<5);
    ?>

  </body>
</html>
