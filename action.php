<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - Performing Actions </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      echo '<h1>Performing Actions</h1>';
      # $_GET superglobal is open and appears in URL
      # $_POST superglobal is private and does not appear in superglobal
    ?>

    <form action="action_handler.php" method="POST">
    <dl>
    <dt>Name:
    <dd><input type="text" name="name">
    <dt>Email Address:
    <dd><input type="text" name="mail">
    <dt>Comments:
    <dd><textarea rows="5" cols="20" name="comment"></textarea>
    </dl>
    <p><input type="submit"></p>
    </form>

  </body>
</html>
