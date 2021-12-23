<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Write a PHP Script to swap the values of two variables.</title>
</head>
<body>
    <?php
      $a=20;
      $b=30;
      echo "a := ".$a."<br>."."b := ".$b;
      $temp=$a;
      $a=$b;
      $b=$temp;
      echo "<br>"."After Swip ..."."<br>";
      echo "a := ".$a."<br>."."b := ".$b;

    ?>
</body>
</html>