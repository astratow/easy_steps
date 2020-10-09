<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template </title>
  </head>
  <body>
    <?php
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
    ?>
  </body>
</html>
