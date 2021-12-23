<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>. Write a PHP Script to display the surface area and volume of a cuboid</title>
</head>
<body>
    <?php

        $l=10;
        $b=20;
        $h=30;

        echo "Surface area :=".(2*($l*$b+$l*$h+$b*$h ))."<br>";
        echo  "volume =". ($l*$b*$h)."<br>";

    ?>
</body>
</html>