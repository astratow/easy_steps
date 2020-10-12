<!DOCTYPE HTML>
<!-- File showing arrays -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - arrays </title>
  </head>
  <body>
<?php
      echo "<h1>Basic PHP template - arrays </h1>" ;
      #write traditional greatings;
      $day = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
      foreach($day as $value){
        echo "&bull; $value";
      }
      $month = array('jan' => 'January',
                      'feb' => 'Februrary',
                      'mar' => 'March',
                      'apr' => 'April',
                      'may' => 'May',
                      'jun' => 'June',
                      'jul' => 'July',
                      'aug' => 'August',
                      'sep' => 'September',
                      'oct' => 'October',
                      'nov' => 'November',
                      'dec' => 'December'
      );
      echo '<dl>';
      foreach($month as $key => $value){
        echo "<dt> $key <dd> $value";
      }
      echo "</dl>";
      // implode() transfers array into string 
      $string_month = implode(';', $month);
      echo $string_month;
      $array_month = explode(';', $string_month);
      echo $array_month;
    ?>
  </body>
</html>
