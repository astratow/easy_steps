<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
	if(isset($_POST['id'])){
		$id=$_POST['id'];
		#Handler statements to be inserted here
		if($id==123){
			session_start();
			$_SESSION['id']=$id;
			header('Location: location.php');
			exit();
		}else{
			echo "<p>$id is an incorrect ID!</p>";
		}
		}

	echo '<form action="header2.php" method="POST">
		<fieldset><legend>Enter Your User ID</legend>
		<p>ID: <input type="text" name="id"></p>
		</fieldset><input type="submit"></form>';
    ?>

  </body>
</html>
<!--
# header() set Location header to redirect the browser to a new page 
</html>
