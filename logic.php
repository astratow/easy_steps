<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - Logic </title>
  </head>
  <body>
    <?php
      #logic manipulations
      echo '<h1>Basic PHP template - Logic </h1>';
      $yes = TRUE;
      $no = FALSE;
      $result=($no&&$no)?'TRUE':'FALSE';
        echo "No AND No returns $result <br>";
      $result=($yes&&$no)?'TRUE':'FALSE';
        echo "Yes AND No returns $result <br>";
      $result=($yes&&$yes)?'TRUE':'FALSE';
        echo "Yes AND Yes returns $result <br>";
      echo '<hr>';
       $result=($no||$no)?'TRUE':'FALSE';
        echo "No OR No returns $result <br>";
      $result=($yes||$no)?'TRUE':'FALSE';
        echo "Yes OR No returns $result <br>";
      $result=($yes||$yes)?'TRUE':'FALSE';
        echo "Yes OR Yes returns $result <br>";
 
    ?>

  </body>
</html>
