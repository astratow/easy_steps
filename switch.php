<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - Switch statement </title>
  </head>
  <body>
    <?php
      #write traditional greatings;
      echo '<h1>Basic PHP template - Switch statement </h1>';
      $number=3;
      $letter='B';
      switch($number)
      {
        case 1 : echo '<h6>Number is ONE</h6>';
          break;
        case 2 : echo '<h6>Number is TWO</h6>';
          break;
        case 3 : echo '<h6>Number is THREE</h6>';
          break;
        default: echo '<h6>Number is UNRECOGNIZED</h6>';
      }
      switch($letter)
      {
        case 'A': echo '<h6>Letter is A</h6>';
         break;
        case 'B': echo '<h6>Letter is B</h6>';
          break;
        case 'C': echo '<h6>Letter is C</h6>';
          break;
        default: echo '<h6>Letter is UNRECOGNIZED</h6>';
      }
      switch($number)
      {
      case 0: case 1: case 2: echo '<h5>Less than 3<h5>';
        break;
      default: echo '<h5>3 or more, or less thatn ZERO</h5>';
      }

   ?>

  </body>
</html>
