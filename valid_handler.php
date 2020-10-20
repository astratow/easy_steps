<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Valid Handler </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      echo '<h1>Hello, this is validation handler!</h1>';
      if(!empty($_POST['quantity'])){
        $quantity=$_POST['quantity'];
        #format validation tp be inserted
        if(!is_numeric($quantity)){
          $quantity=NULL;
          echo 'Quantity must be numeric<br>';
        }
      }else{
        $quantity=NULL;
        echo 'You must enter a quantity<br>';
      }
      if(!empty($_POST['email'])){
        $email=$_POST['email'];
        #format validation to be inserted here
        $pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$^";
        if(!preg_match($pattern, $email)){
          $email=NULL;
          echo 'Emal address is incorrect format';
        }
      }else{
        $email=NULL;
        echo 'Email address is incorrect format';
      }
      if(($quantity!=NULL)&&($email!=NULL)){
        echo "Email: $email<br>Quantity: $quantity";

      }
    ?>

  </body>
</html>
