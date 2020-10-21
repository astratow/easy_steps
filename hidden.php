<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Sending hidden data</title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      echo '<h1>Sending hidden data</h1>';
      date_default_timezone_set('UTC');
      $time=date('H:i, F j');
      $user='Artur';

      echo '
        <form action="hidden_handler.php method="POST">
        <fieldset>
        <legend>Send us your comments</legend>
        <textarea rows="5" col="20" name="comment">
        </textarea>
        <input type="hidden" name="user" value="'.$user.'">
        <input type="hidden" name="time" value="'.$time.'">
        </fieldset>
        <p>
        <input type="submit">
        </p>
        </form>
      ';
    ?>

  </body>
</html>
