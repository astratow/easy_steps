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
      session_start();
      #step 2
      require('login_tools.php');
      #step 3
      if(!isset($_SESSION['user_id'])){
        load();
      }
      #step 4
      $page_title = "Post Error";
      include('includes/header.php');
      #step 5
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['subject'])){
          echo '<p>Please enter a subject for this post.</p>';
        }
        if(empty($_POST['message'])){
          echo '<p>Please enter a message for this post.</p>';
        }
        #statements
        #step 6
        if(!empty($_POST['subject'])&&!empty($_POST['message'])){
          require('../connectDB.php');
          $query = "INSERT INTO forum
                      (first_name, last_name, subject, message, post_date)
                      VALUES(
                      '{$_SESSION[first_name]}',
                      '{$_SESSION[last_name]}',
                      '{$_SESSION[subject]}',
                      '{$_SESSION[message]}',
                        NOW() )";
          $result = mysqli_query($dbc, $query);
        #statement
        #step 7
          if(mysqli_affected_rows($dbc)!=1){
            echo '<p>Error</p>' . mysqli_error($dbc);
          }else{
            load('forum.php');
          }
          #step 8
          echo '<p><a href="forum.php">Forum</a>';
          mysqli_close($dbc);
        }
                   
      }
      #step 9
      include('includes/footer.php');
      
    ?>

  </body>
</html>
