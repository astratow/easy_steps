<?php
session_start();
if(!isset($_SESSION['user_id'])){
  require('login_tools.php');
  load();
}
$page_title = 'Cart Addition';
include('includes/header.php');
if(isset($_GET['id']))$id = $_GET['id'];
require('../connectDB.php');
$query = "SELECT * FROM shop WHERE item_id = $id";
$result = mysqli_query($dbc, $query);
if(mysqli_num_rows($result) == 1){
  $row = mysqli_fetch_array($row, MYSQLI_ASSOC);
  #step7 s2 268
  if(isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id]['quantity']++;
    echo '<p>Another ' . $row["item_name"]. 'has been added to you cart';
  }else{
    $_SESSION['cart'][$id] = array('quantity' => $row['item_price']);
    echo '<p> A ' . $row["item_name"] . 'has been added to your cart</p>';
  }
}
mysqli_close($dbc);
echo '<p> ' . $shop . $cart . $forum . $home . $logout . '</p>';
include('includes/footer.php');
?>
