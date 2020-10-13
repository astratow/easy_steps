<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Basic PHP template - Dimensions</title>
  </head>
  <body>
    <?php
      #write traditional greatings;
        echo '<h1> Basic PHP template - Dimensions</h1>';

        $letters=array('A','B','C','D','E','F','G','H','I','J');
        $numbers=array(0,1,2,3,4,5,6,7,8,9);
        $matrix=array('Letter'=>$letters, 'Number'=>$numbers);
        echo "<p>Start: {$matrix['Letter'][0]}</p>";
        
        foreach($matrix as $array=>$list){
          echo '<ul>';
          foreach($list as $key=>$value){
            echo "<li>$array [$key]=$value";
            }
            echo '<ul>';
          }

      ?>

  </body>
</html>
