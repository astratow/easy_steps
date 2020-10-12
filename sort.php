<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - sorting arrays</title>
  </head>
  <body>
    <?php
      #write traditional greatings;
      echo '<h1>Basic PHP template - sorting arrays</h1>';
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
