<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a PHP Script to calculate the area of Circle, Square, and Rectangle</title>
</head>
<body>
    <hr>
    <h2>Area Of Circle</h2>
    <br>
    
    <?php
       $radius=10;
       echo "Area of Circle := ".(22/7*$radius*$radius)."<br>";

    ?>
      <hr>
      <h3>Area of square</h3>
      <br>
      <?php
          $side=10;
          echo "Area of Square := ".($side*$side)."<br>";
      ?>
      <hr>
      <h3>Area of Rectangle</h3>
      <br>
      <?php
           $l=10;
           $w=20;
           echo "Area of Rectangle := ".($l*$w)."<br>";

      ?>
      <hr>
</body>
</html>