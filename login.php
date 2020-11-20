<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      #echo '<h1>Hello, World!</h1>';
      #step 1
      $page_title='Login';
      include('includes/header.php');
      #step 2
      if(isset($errors) && !empty($errprs)){
        echo '<p id="err_msg">Oops! There was a problem:<br>';
        foreach($errors as $msg){
          echo "-$msg<br>";
        }
        echo 'Please try again or <a href="register.php">Register</a></p>';
      }
    ?>
    <!--step3-->
    <h1>Login</h1>
    <form action="login_action.php" method="POST">
      <p>
        Email address: <input type="text" name="email">
      </p> 
      <p>
       Password: <input type="password" name="pass">
      </p>
      <p>
        <input type="submit" value="Login">
      </p>
    </form>
    <?php
      #step 4
      include ('includes/footer.php');
    ?>

  </body>
</html>
