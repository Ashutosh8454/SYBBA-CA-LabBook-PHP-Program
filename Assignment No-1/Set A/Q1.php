<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Write a PHP Script to display Quotient and Remainder of the division of two variables.
</title>
</head>
<body>
    <?php
       $a=20;
       $b=3;

       echo "First number are := ".$a."<br>"."Second Number := ".$b."<br>";
       echo "Reminder := ".($a%$b)."<br>";
       echo "Quotient := ".($a/$b);
    ?>
</body>
</html>