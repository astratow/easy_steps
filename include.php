<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      $page_title='PHP Include';
      include('includes/header.php');
      echo '<form action="include.php" method="POST">
        <p>Name: <input type="text" name="name"></p>
        <p>Email: <input type="text" name="name"></p>
        <p><input type="submit"></p>
        </form>';
      include('includes/footer.php');

    ?>

  </body>
</html>
