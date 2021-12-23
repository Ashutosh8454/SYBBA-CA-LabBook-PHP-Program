<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Write a PHP script to display a maximum of two numbers using a conditional operator.
</title>
</head>
<body>
    <?php

    $a=20;
    $b=30;

      if($a<$b)
      {
          echo "Maximum := ".$b."<br>";
      }
      else{
           echo "maximum := ".$a;
      }

    ?>
    
</body>
</html>