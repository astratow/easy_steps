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
      $page_title = 'Forum';
      include('includes/header.php');
      #step 4
      require('../connectDB.php');
      #step 5
      $query = "SELECT * FROM forum";
      $result = mysqli_query($dbc, $query);
      if(mysqli_num_rows($result)>0) {
        #statement
        #step 6
        echo '<table><tr><th>Posted By</th>
          <th>Subject</th><th id="msg">Message</th></tr>';
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          echo '<tr><td>' . $row['first_name'] . ' ' . $row['last_name'] .
            '<br>' . $row['post_date'] . '</td></td>' .$row['subject'] . 
            '</td><td>' . $row['message'] . '</td></tr>';
        }
        echo '</table>';
      } else {
        echo '<p>There are currently no messages.</p>';
      }
      #step 7
	  require('links.php');
      echo $links;
      #step 8
      mysqli_close($dbc);
      #step 9
      include('includes/footer.php');

    ?>

  </body>
</html>
