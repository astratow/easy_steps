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
        require('../connectDB.php');
        $query = "INSERT INTO orders(user_id, total, order_date) VALUES("
          . $_SESSION['user_id'] . "," .
          $_GET['total'] . ", NOW())";
        $result = mysqli_query($dbc, $query);
        $order_id = mysqli_insert_id($dbc);
        $query = "SELECT * FROM shop WHERE item_id IN (";
        foreach($_SESSION['cart'] as $id => $value){
          $query =$id . ',';
        }
        $query = substr($query, 0, -1) . ') ORDER BY item_id ASC';
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
          $query_W = "INSERT INTO order_contents (order_id, item_id, quantity, price) 
                      VALUES($order_id, " . $row['item_id'] . "," .
                      $_SESSION['cart'][$row['item_id']]['quantity'] . "," .
                      $_SESSION['cart'][$row['item_id']]['price'] . ")";
          $result_w = mysqli_query($dbc, $query_w);
          mysqli_close($dbc);
          echo "<p>Thanks for your order. Your Order Number is #" . $order_id . "</p>";
          $_SESSION['cart'] = NULL;
        }  
      }else{
        echo '<p>There are no items in your cart.</p>';
      }
      require('links.php');
      echo '<p>' . $shop . $forum . $home . $logout. '</p>';
      include('includes/footer.php');
    ?>

  </body>
</html>
