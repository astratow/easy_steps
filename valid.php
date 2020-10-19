<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP - Validating data form </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      echo '<h1>Basic PHP - Validating data form </h1>';
      ?>
    <form action="valid_handler.php" method="POST">
    <fieldset>
    <legend> Enter a quantity and email address</legend>
    <p>Quantity: <input type="text" name="quantity"></p>
    <p>Email Address: <input type="text" name="email"></p>
    </fieldset>
    <p><input type="submit"></p>
    </form>

  </body>
</html>
