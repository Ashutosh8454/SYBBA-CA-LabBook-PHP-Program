<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the total and percentage of Marks of Subject</title>
</head>

<body>
    <div style="background-color: blue; border-radius:20px;color:white;">
        <center>
            <h1>Marks of student</h1>
        </center>
    </div>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    

      

        <table>
            <tr>
                <th>Subject Name</th>
                <th>Marks</th>

            </tr>
            <tr>
                <td>Data Structure</td>
                <td>80</td>

            </tr>
            <tr>
                <td>Digital Marketing</td>
                <td>90</td>

            </tr>
            <tr>
                <td>Big Data</td>
                <td>98</td>

            </tr>
            <tr>
                <td>PHP</td>
                <td>97</td>

            </tr>
            <tr>
                <td>Software Engineering</td>
                <td>99</td>

            </tr>
           

        </table>

        <?php
        $Data_structure = 80;
        $Digital_marketing = 90;
        $Big_Data = 98;
        $Php = 97;
        $Software_Engineering = 99;
        $total=($Data_structure+$Digital_marketing+$Big_Data+$Php+$Software_Engineering);
        $per=($total/500)*100;
        
        echo "<center><h3>Total Marks ________________________________________________________".$total;
        echo "<center><h4>Total Marks ___________________________________________________________".$per;
           
         
        ?>
    </body>

</html>