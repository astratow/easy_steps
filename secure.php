<html lang=en>
<head>
  <meta charset="utf-8">
  <title>Secure</title>
</head>
<body>
  <form action="secure.php" method="POST">
  <p> New Name: <input type="text" name="name">
  <input type="submit"></p></form>
<?php
require('../connectDB.php');
if(!empty($_POST['name']) && (!is_numeric($_POST['name']))){
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($dbc, $name);
  $name = strip_tags($name);
}else{
  echo 'No valid new name submitted';
}

$query = 'SELECT * FROM towels WHERE id=1';
#echo $query;
$result = mysqli_query($dbc, $query);
#echo $result;
while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
  echo "<p>Name: $row[1]</p>";
}
mysqli_close($dbc);
?>
</body>
