<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - Constants</title>
  </head>
  <body>
    <?php
#Defining constants and using them
#using built in constants
      define('USER', 'Artur');
      echo '<h1>Hello, '.USER.'! <br>This chapter is about constants</h1>';
      echo "<p>You are using PHP version ".PHP_VERSION;
      echo " running on ".PHP_OS."</p>";
    ?>

  </body>
</html>
