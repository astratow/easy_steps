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
        echo '<p>Yes, 4 is greater than 2.<br><br>';
        }
      echo "if((4>2)&&(8>4))<br><br>";

      if((4>2)&&(8>4)){
      echo '4 is greater than 2 AND 8 is greater than 4.<br><br>';
      }

      if(4>8){
        echo '4 is greater than 8<br><br>';
      }else{
        echo '4 is less than 8<br><br>';
      }
      
      if(4>8){
        echo 'This test is TRUE</p>';
      }elseif(8>4){
        echo 'Alternative test is TRUE</p>';
      }else{
        echo 'Both test are FALSE</p></strong>';
      }



   ?>

  </body>
</html>
