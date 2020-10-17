<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - Function</title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      echo '<h1>Functions</h1>';
      $result=5+5;

      function square(){
        $result=5*5;
        echo "Local Square Result = $result<br>";
      }

       function cube(){
        $result=5*5*5;
        echo "Local Cube Result = $result<br>";
      }

      echo "Global Cube Result = $result<br>";
      square();
      cube();
     
    ?>

  </body>
</html>
