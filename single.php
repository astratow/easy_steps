<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      echo '<h1>Hello, World!</h1>';
      if($_SERVER['REQUEST_METHOD']!='POST'){
        #form display statement here
        echo '
          <form action="single.php" method="POST">
          <fieldset>
          <legend>Send us your comments</legend>
          <textarea rows="5" cols="40" name="comment">
          </textarea>
          </fieldset>
          <p>
          <input type="submit">
          </p>
          </form>';
      }else{
        #form handling statement here
        if(!empty($_POST['comment'])){
          $comment=$_POST['comment'];
          echo "Comment: $comment";
        }else{
          $comment=NULL;
          echo 'You must enter a comment';
        }
      }

    ?>

  </body>
</html>
