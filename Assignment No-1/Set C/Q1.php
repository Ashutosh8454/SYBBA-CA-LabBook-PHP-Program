<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $Name="Ashutosh Kumar";
    $Address ="Pune Chakan Maharashtra";
    $contact=9661931716;
    $Gender="male";
    $jDate="12-08-2022";
    $noOfPerson=2;
    $ticketPrice=4000;
     
     echo "Name :=".$Name."<br>";
     echo"Address :=".$Address."<br>";
     echo "Contact Number :=".$contact."<br>";
     echo "Gender :=" .$Gender."<br>";
     echo "Journey Date :=".$jDate."<br>";
     echo "Number of Person :=".$noOfPerson."<br>";
    echo "Per Ticket Price :=".$ticketPrice."<br>";
    echo "Total Price :=".($noOfPerson*$ticketPrice)."<br>";

    ?>
</body>
</html>