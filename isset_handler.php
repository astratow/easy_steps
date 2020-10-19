<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Checking set values - isset handler</title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      #echo '<h1>Hello, World!</h1>';
      if(isset($_POST['definition'])){
        $definition=$_POST['definition'];
      }else{
        $definition=NULL;
      }
      #response statements to be inserted here
      if($definition!=NULL){
        if($definition!='Scripting'){
          echo "$definition is incorrect";
        }else{
          echo "$definition is correct";
        }
      }else{
        echo "You must select one answer";
      }
    ?>

  </body>
</html>
