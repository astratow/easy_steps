<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic php template - arithmetics </title>
  </head>
  <body>
    <?php
      #Basic arithmetics
    echo '<h1>Basic php template - arithmetics </h1>';
      $a=4;
      $b=8;
      
      $result=$a+$b;
      echo "Addition: $result<br>";

      $result=$b-$a;
      echo "Substraction: $result<br>";

      $result=$a*$b;
      echo "Multiplication: $result<br>";

      $result=$b/$a;
      echo "Division: $result<br>";

      $result=$a%$b;
      echo "Modulo: $result<br>";

      $a++;
      echo "Incrementation: $a <br>";
      $b--;
      echo "Decrementation: $b <br>";

    ?>

  </body>
</html>
