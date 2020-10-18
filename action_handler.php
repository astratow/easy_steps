<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Action handler</title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      $name=$_POST['name'];
      $email=$_POST['mail'];
      $comment=$_POST['comment'];
      echo "<p>Thanks for this comment $name ...</p>";
      echo "<p><i>$comment</i></p>";
      echo "<p>We will reply to $email</p>";
    ?>

  </body>
</html>
