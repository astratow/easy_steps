<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      #step 1
      session_start();
      #step 2
      if(!isset($_SESSION['user_id'])){
        require('login_tools.php');
        load();
      }
      #step 3
      $page_title = 'Home';
      include('includes/header.php');
      #step 4
      echo "<h1>Home</h>
        <p>You are now logged in,
        {$_SESSION['first_name']}{$_SESSION['last_name']}
        </p>";
      #step 5 
	  require('links.php');
      echo '<p>' . $forum . $shop . $logout . '</p>';
      include('includes/footer.php');
    ?>

  </body>
</html>
