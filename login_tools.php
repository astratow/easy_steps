<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      #echo '<h1>Hello, World!</h1>';
      #step 1
      function load($page='login.php'){
        #statements here
        #step 2
        $url='http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'];
        #step 3
        $url = rtrim($url, '/\\');
        $url .= '/'. $page;
        #step 4
        header("Location: $url");
        exit();
      }
      #step 4
      function validate($dbc, $email='', $pwd=''){
        #statements (steps 6-10)
        #step 6
        $errors = array();
        #step 7
        if(empty($email)){
          $errors[]='Enter your email address.';
        }else{
          $e = mysqli_real_escape_string($dbc, trim($email));
        }
        #step 8
        if(empty($pwd)){
          $errors[] = 'Enter your password.';
        }else{
          $p = mysqli_real_escape_string($dbc, trim($pwd));
        }
        #step 9
        if(empty($errors)){
          $q = "SELECT user_id, first_name, last_name
                FROM users
                WHERE email = '$e'
                AND pass = SHA2('$p', 256)";
          $r = mysqli_query($dbc, $q);

          if(mysqli_num_rows($r)==1){
            $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
            return array(true, $row);
          }else{
            $errors[] = 'Email address and password not found.';
          }
        }
        return array(false, $errors):
      }
      
    ?>

  </body>
</html>
