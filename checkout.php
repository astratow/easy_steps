<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      session_start();
      if(!isset($_SESSION['user_id'])){
        require('login_tools.php');
        load();
      }
      $page_title = 'Checkout';
      include('includes/header.php');
      if(isset($_GET['total'])&&($_GET['total']>0)&&(!empty($_SESSION['cart']))){
        #step 5-10
      }else{
        echo '<p>There are no items in your cart.</p>';
      }
    ?>

  </body>
</html>
