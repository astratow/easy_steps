<?php

require('../connectDB.php');
function show_records($dbc){
  $query = 'SELECT * FROM towels';
  $result = mysqli_query($dbc, $query);

  $numRows = mysqli_num_rows($result);

  if($numRows > 0){
    echo '<h1>Records in towels table</h1>';
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      echo '<br>' . $row['name'] . ' | ' . $row['color'] .'@' . $row['price'];
    }
    echo "<br>$numRows Records";
  }else{
    echo '<p>' . mysqli_error($dbc) . '</p>';
  }
}
show_records($dbc);

$query = 'INSERT INTO towels(name, color, price)
          VALUES ("Sunset", "Orange", 9.99)';
$result = mysqli_query($dbc, $query);
if($result){
  show_records($dbc);
}else{
  echo '<p>' . mysqli_error($dbc) . '</p>';

}
mysqli_close($dbc);

?>

