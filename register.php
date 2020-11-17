<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      $page_title = 'Register';
      include('includes/header.php');
        #step2
      if($_SERVER['REQUEST_METHOD']=='POST'){
        #step3
        require('../connectDB.php');
        $errors = array();
        #step4
        if(empty($_POST['first_name'])){
          $errors[]='Enter your first name.';
        }else{
          $fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
        }
        #step5
        if(empty($_POST['last_name'])){
          $errors[] = 'Enter your last name.';
        }else{
          $ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
        }
        #step6
        if(empty($_POST['email'])){
          $errors[] = 'Enter your email address.';
        }else{
          $e = mysqli_real_escape_string($dbc, trim($_POST['email']));
        }
        #step 7
        if(!empty($_POST['pass1'])){
          if($_POST['pass1']!=$_POST['pass2']){
            $errors[] = 'Passwords do not match.';
          }else{
            $p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
          }
          }else{
            $errors[] = 'Enter your password.';
          }
        
        #step8
        if(empty($errors)){
          $q = "SELECT user_id FROM users WHERE email = '$e'";
          $r = mysqli_query($dbc, $q);
          if(mysqli_num_rows($r) != 0){
            $errors[] = 'Email address already registered. <a href = "login.php">Login</a>';
          }
        }
        #step9
        if(empty($errors)){
          $q = "INSERT INTO users 
                (first_name, last_name, email, pass, reg_date)
                VALUES('$fn', '$ln', '$e', SHA2('$p', 256), NOW())";
			#echo $q;
          $r = mysqli_query($dbc, $q);
		 
          if($r){
            echo '<h1>Registered!</h1>
                  <p>You are now registered.</p>
                  <p><a href="login.php">Login</a>';
            }
            mysqli_close($dbc);
            include('includes/footer.php');
            exit();
        }else{
          echo '<h1>Error!</h1>
                <p id="err_msg">The following eror(s) occurred:<br>';
          foreach($errors as $msg){
            echo "- $msg<br>";
          }
          echo 'Please try again.</p>';
          mysqli_close($dbc);
        }
	  }
                
    ?>
    <h1>Register</h1>
    <form action="register.php" method="POST">
    <p>
    First Name: <input type="text" name="first_name"
                  value="<?php if(isset($_POST['first_name']))
                  echo $_POST['first_name'];?>">
    Last Name: <input type="text" name="last_name"
                  value="<?php if(isset($_POST['last_name']));?>">
    </p><p>
    Email Address: <input type="text" name="email"
                        value="<?php if(isset($_POST['email']))
                        echo $_POST['email'];?>">
    </p><p>
    Password: <input type="password" name="pass1"
                    value="<?php if(isset($_POST['pass1']))
                            echo $_POST['pass1'];?>">
    Confirm Password: <input type="password" name="pass2"
                    value="<?php if(isset($_POST['pass2']))
                    echo $_POST['pass2'];?>">
    </p><p>
    <input type="submit" value="Register"></p>
    </form>
    <?php include('includes/footer.php');?>


    
  </body>
</html>
