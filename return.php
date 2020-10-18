<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP - Returning Values </title>
  </head>
  <body>
    <?php
      #write traditional greetings;
      echo '<h1>Returning Values</h1>';
      #row header
      echo "<table><thead><tr><th>Argument</th>
                              <th>Description</th>
                              <th>Example</th></thead>";
      #row 1
      echo "<tbody><tr><td align='center'>Y</td> 
            <td align='center'>Year as four digits</td>
            <td align='center'>2020</td></tr>";

      #row2 
      echo "<tbody><tr><td align='center'>y</td> 
            <td align='center'>Year as two digits</td>
            <td align='center'>20</td></tr>";

      #row 3
      echo "<tbody><tr><td align='center'>n</td> 
            <td align='center'>Month as one or two digits</td>
            <td align='center'>5</td></tr>";
     
      #row 4
      echo "<tbody><tr><td align='center'>m</td> 
            <td align='center'>Month as two digits</td>
            <td align='center'>02</td></tr>";
 
      #row 5
      echo "<tbody><tr><td align='center'>F</td> 
            <td align='center'>Full month name</td>
            <td align='center'>March</td></tr>";
 
      #row 6
      echo "<tbody><tr><td align='center'>M</td> 
            <td align='center'>Month name as three letters</td>
            <td align='center'>Jun</td></tr>";

      #row 7
      echo "<tbody><tr><td align='center'>j</td> 
            <td align='center'>Day as one or two digits</td>
            <td align='center'>4</td></tr>";

      #row 8
      echo "<tbody><tr><td align='center'>d</td> 
            <td align='center'>Day as two digits</td>
            <td align='center'>02</td></tr>";

      #row 9
      echo "<tbody><tr><td align='center'>l</td> 
            <td align='center'>Weekday full name</td>
            <td align='center'>Monday</td></tr>";

      #row 10
      echo "<tbody><tr><td align='center'>D</td> 
            <td align='center'>Weekday three letters</td>
            <td align='center'>Mon</td></tr>";

      #row 11
      echo "<tbody><tr><td align='center'>S</td> 
            <td align='center'>Original suffix two letters</td>
            <td align='center'>th</td></tr>";

      #row 12
      echo "<tbody><tr><td align='center'>H</td> 
            <td align='center'>Hours in 24-hours format</td>
            <td align='center'>14</td></tr>";

      #row 13
      echo "<tbody><tr><td align='center'>i</td> 
            <td align='center'>Minutes</td>
            <td align='center'>45</td></tr>";

      #row 14
      echo "<tbody><tr><td align='center'>s</td> 
            <td align='center'>Seconds</td>
            <td align='center'>20</td></tr></body>";

      date_default_timezone_set('UTC');

      $user="<strong>astratow</strong>";

      function display_date(){
        return date('l, jS F');
      }
      function welcome($user){
        $hour=date('H');
        $greetings=($hour<12)?'<br>Good Morning ':'<br>Good Day';
        $greetings.=$user;
        return $greetings;
      }
      echo display_date();
      echo welcome("$user");
      
    ?>

  </body>
</html>
