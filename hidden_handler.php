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

    ?>

  </body>
</html>
