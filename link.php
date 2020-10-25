<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
      if(isset($_GET['id'])){
        #handler statements to go here
        $id=$_GET['id'];
        switch($id){
          case 1: echo 'Cow selected<hr>'; break;
          case 2: echo 'Dog selected<hr>'; break;
          case 3: echo 'Goat selected<hr>'; break;
        }
      }

      echo '<h1>Select a buddy</h1>';
      echo '<p><a href="link.php?id=1">Cow</a>|';
      echo '<a href="link.php?id=2">Dog</a>|';
      echo '<a href="link.php?id=3">Goat</a></p>';
  
    ?>

  </body>
<!--
# $_SERVER -  superglobal array variable that stores the page request  method
# $_SESSION - superglobal array variable that stores user data acros pages of 
#             website until user quits
# $_POST    - superglobal array variable that stores the value of submitted
#             form values in like-named array elements. 
#             ie. name="city" -> $_POST['city']
# $_GET     - superglobal array variable that stores the value of submitted
#             data values in named array ellements.
#             ie. name="id" -> $_GET[.id']
#             <a href="www.example.com/script.php?id=1">
#             
-->
</html>
