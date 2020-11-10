<?php
require('../connectDB.php');
function show_records($dbc){
  $query = 'SELECT * FROM prints';
  $result = mysqli_query($dbc, $query);

  if($result){
    echo '<h1>Records in prints table</h1>';

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      echo '<br>' . $row['id'] . ') ' . $row['name'] . '@' . $row['price'];
    }
  }else{
    echo '<p>' . mysqli_error($dbc) . '</p>';
  }
}
show_records($dbc);
$query = 'INSERT INTO prints(name, price) VALUES
  ("One Center", 32.99),
  ("Yellow Red Blue", 36.99)';
$result = mysqli_query($dbc, $query);
if($result){
  show_records($dbc);
}else{
  echo '<p>' . mysqli_error($dbc). '</p>';
}
mysqli_close($dbc);
?>
