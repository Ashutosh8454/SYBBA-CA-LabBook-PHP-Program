<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Write a PHP script that will perform pre and post-increment of a number. (Example ++a, 
a++)</title>
</head>
<body>
    
<?php
     $a=1;
     $b=1;

     echo "perform pre".++$a."<br>";
     echo "perform post".$b++."<br>";
     echo "Value of a:=".$a."<br>";
     echo "Value of b:=".$b."<br>";
?>
</body>
</html>