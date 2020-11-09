<?php
require('../connectDB.php');
$query='SHOW TABLES';
$result=mysqli_query($dbc, $query);
if($result){
  echo '<h1>Tables on site_db database</h1>';
  #Statements to be inserted here
  while($row=mysqli_fetch_array($result, MYSQLI_NUM)){
    echo '<br>'  . $row[0];
  }
  mysqli_free_result($result);
  mysqli_close($dbc);
  }else{
    echo '<p>' . mysqli_error($dbc) . '<p>';
  }
?>
