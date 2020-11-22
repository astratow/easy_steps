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
      if(!isset($_SESSION['user_id'])) {
        require('login_tools.php');
        load();
      }
      #step 3
      $page_title = 'Post Message';
      include ('includes/header.php');
      #step 4 
      echo '<form action="post_action.php" method="POST" accept-charset="utf-8">
        <p>Subject:<br>
        <input name="subject" type="text" size="64"></p>
        <p>Message:<br>
        <textarea name="message" rows="5" cols="50">
        </textarea></p>
        </p><input type="submit" value="Submit"></p>
        </form>';
      #step 5
      require ('links.php');
      echo $links;
      #step 6
      include('includes/footer.php');
    ?>

  </body>
</html>
