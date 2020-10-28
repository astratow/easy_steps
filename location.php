<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Location</title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      session_start();
      if(isset($_SESSION['id'])){
        $id=$_SESSION['id'];
        echo "Welcome user ID #id";
      }
    ?>

  </body>
</html>
