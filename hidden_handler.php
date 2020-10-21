<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Hidden handler</title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      echo '<h1>Hidden handler</h1>';
      if(!empty($_POST['comment'])){
        $comment=$_POST['comment'];
      }else{
        $comment=NULL;
        echo 'You must enter a comment';
      }
      $time=(!isset($_POST["time"]))?NULL:$_POST["time"];

      $user=(!isset($_POST['user']))?NULL:$_POST['user'];

      if(($comment!=NULL)&&($time!=NULL)&&($user!=NULL)){
        echo "<p>Comment received:<br>\"$comment\"<br> From<br>$user at $time</p>";
        }

    ?>

  </body>
</html>
