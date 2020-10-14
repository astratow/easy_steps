<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - if else statement</title>
  </head>
  <body>
    <?php
      #write traditional greatings;
      echo '<h1> Basic PHP template - if else statement</h1>';
      echo "<strong>if(4>2)<br>";
      if(4>2){
        echo '<p>Yes, 4 is greater than 2.</p><br>';
        }
      echo "if((4>2)&&(8>4))<br><br>";
      if((4>2)&&(8>4)){
        echo '4 is greater than 2 AND 8 is greater than 4.</strong><br><br>';
      }
   ?>

  </body>
</html>
