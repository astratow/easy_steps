<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      #step 1
      #echo '<h1>Hello, World!</h1>';
      if($_SERVER['REQUEST_METHOD']=='POST'){
        #statements
        #step 2
        require('../connectDB.php');
        #step 3
        require('login_tools.php');
        #step 4
        list($check, $data) = validate($dbc, $_POST['email'], $_POST['pass']);
        #step 5
        if($check){
          session_start();
          $_SESSION['user_id']    = $data['user_id'];
          $_SESSION['first_name'] = $data['first_name'];
          $_SESSION['last_name']  = $data['last_name'];

          load('home.php');
        }else{
          $errors = $data;
        }
        #step 6
        mysqli_close($dbc);
      }
      #step 7
      include('login.php');
  
    ?>

  </body>
</html>
