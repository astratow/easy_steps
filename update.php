<?php
require('../connectDB.php');
function show_records($dbc){
  $query = 'SELECT * FROM watches';
  $result = mysqli_query($dbc, $query);
  $numRows = mysqli_num_rows($result);
  if($numRows>0){
      echo '<h1>Records in watches table</h1>';
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo '<br>' . $row['model'] . '|' . $row['style'] . '@' . $row['price'];
      }
    }else{
      echo '<p>' . mysqli_error($dbc) . '</p>';
    }
  }
show_records($dbc);
$query = 'UPDATE watches SET style="Gent" WHERE style="Ladies"';
$result = mysqli_query($dbc, $query);
if(mysqli_affected_rows($dbc) == 2){
  echo '<hr>' . mysqli_affected_rows($dbc) . ' Records Updated...';
  show_records($dbc);
}
mysqli_close($dbc);

?>
