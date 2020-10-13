<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - Comparing values </title>
  </head>
  <body>
    <?php
      #write traditional greatings;
      echo  '<h1> Basic PHP template - Comparing values </h1>';
      #variables
      $zero=0;
      $nil=0;
      $one=1;
      $upr='a';
      $lwr='a';
      echo
      "zero=0<br>
      nil=0<br>
      one=1<br>
      upr='a'<br>
      lwr='a'<br>";
      $result=($zero==$nil)?'TRUE':'FALSE';
        echo "0 == 0 is $result <br>";
      $result=($zero==$one)?'TRUE':'FALSE';
        echo "0 == 1 is $result <br>";
      $result=($upr==$lwr)?'TRUE':'FALSE';
        echo "A == a is $result <br>";
      $result=($upr!=$nil)?'TRUE':'FALSE';
        echo "A != a is $result <br>";
      $result=($one>$nil)?'TRUE':'FALSE';
        echo "1 > 0 is $result <br>";
      $result=($zero>=$nil)?'TRUE':'FALSE';
        echo "0 >= 0 is $result <br>";
      $result=($one<=$nil)?'TRUE':'FALSE';
        echo "1 <= 0 is $result <br>";








    ?>

  </body>
</html>
