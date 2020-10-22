<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Making sticky forms</title>
  </head>
  <body>
    
  <h1>Sticky form</h1>
  <form action="sticky.php" method="POST">
    <p>Name:
    <input type="text" name="name" 
      value="<?php if(isset($_POST['name']))
                  echo $_POST['name']
                  ;?>">
    </p>
    <p>Email:
      <input type="text" name="email" 
            value="<?php if(isset($_POST['name']))
            echo $_POST['email'];?>">
    </p>
    <p>
      <input type="submit">
    </p>
    </form>
    <?php 
      if($_SERVER['REQUEST_METHOD']=='POST'){
        #Statements to be inserted here
      }
    ?>
  </body>
</html>
