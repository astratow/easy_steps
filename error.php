<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      set_error_handler('error_handler');
      function error_handler($level, $message, $file, $line){
        echo "error [$level]: $message<br> (Check line $line in $file)";
      }
      $num = 500;
      if($num>100){
        trigger_error('Number must be less than 100', E_USER_ERROR);
      }
    ?>

  </body>
</html>
