<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP passing arguments </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      echo '<h1>Passing Arguments</h1>';
      $number=5;
      function square($number){
        $result=$number*$number;
        echo "<strong>$number Squared = $result<br></strong>";
       }
       function cube($number){
        $result=$number*$number*$number;
        echo "<strong>$number Cubed = $result<br></strong>";
       }
     
       square($number);
       cube($number);
       square(3);
       cube(3);
       square(4);
       cube(4);
?> 

  </body>
</html>
