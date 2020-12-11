<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      session_start();
      if(!isset($_SESSION['user_id'])){
        require('login_tools.php');
        load();
      }
      $page_title = 'Goodbye';
      include('includes/header.php');
      $_SESSION = array();
      session_destroy();
      require('links.php');
      echo "<h1>Goodbye!</h1>
        <p>You are now logged out.</p> "
        . $logout;
      include('includes/footer.php');
    ?>

  </body>
</html>
