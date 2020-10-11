<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      #write traditional greatings;
      echo 'Hello, World!';
      $cars=array(
        'Dodge'=>'Viper',
        'Chevrolet'=>'Camaro',
        'Ford'=> 'Mustang',
        'Opel'=> 'Corsa',
        'Toyota'=>'Yaris'
      );
      echo '<dl><dt>Original Element Order: <dd>';
      foreach($cars as $key=>$value){
        echo '&bull;', $key . ' ' . $value;
      }
      

    ?>

  </body>
</html>
