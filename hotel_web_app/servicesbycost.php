<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="button.css">
</head>
<a href="agoresGeneral.html" class="button">Back</a>
<center><h2 style = "color:white;">Αγορές</h2></center>
<form action = "displayservicesbycost.php" method="get">
    <br>
    <center style="color:white;">Customer ID (1-20):
        <input type="text" name="search1" size="48">
        </br>

        <br>
        <center style="color:white;">Cost of Service:
            <input type="text" name="search2" size="48">
            </br>
            <br>

            <input type="submit" value="submit">
            <input type="reset" value="Reset">
        </center>
        <br>

</form>


<?php

echo 'Hotel Customers Mapping:';

include("DBConnection.php");

$sql = "SELECT * from Hotel.Customer";
$result = mysqli_query($con,$sql);

?>
<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
    <tr>
        <th style="color:white;">NFC ID </th>
        <th style="color:white;">First Name</th>
        <th style="color:white;">Last Name/th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["nfc_id"]; ?></td>
            <td style="color:white;"><?php echo $row["first_name"]; ?></td>
            <td style="color:white;"><?php echo $row["last_name"]; ?></td>
        </tr>
        <?php
    }
    ?>

</body>
</html>


