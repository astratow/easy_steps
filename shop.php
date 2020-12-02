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
      if(!isset($_SESSION['user_id'])){
        require('login_tools.php');
        load();
      }
      #step 3
      $page_title = 'Shop';
      include('includes/header.php');
      #step 4
      require('../connectDB.php');
      #step 5
      $query = "SELECT * FROM shop";
      $result = mysqli_query($dbc, $query);
      if(mysqli_num_rows ($result) > 0){
        #step 6
        echo '<table><tr>';
        while($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)){
          echo '<td><strong>' . $row['item_name'] .
            '</strong><br>' . $row['item_desc'] .
            '<br><img src=' . $row['item_img'] .
            '><br>$' . $row['item_price'] .
            '<br><a href="added.php?id=' . $row['item_id'].
            '">Add To Cart</a></td>';
        }
        echo '</tr></table>';
        mysqli_close($dbc);
      } else {
        echo'<p>There are currently no items in this shop. </p>';
      }
      require('links.php');
      include('includes/footer.php');

    ?>

  </body>
</html>
