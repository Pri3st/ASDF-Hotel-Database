<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="button.css">
</head>
<a href="queriesgeneral.html" class="button">Back</a>
<center><h1 style = "color:white;">Services by Type</h1></center>
<center><h2 style = "color:white;">Please Input the Service Type Code You Wish to Find Information</h2></center>
<center><h3 style = "color:white;">In this form you can query the ASDF Hotel Database for information regarding the Customers who have used a specific Service. The form input must be valid. For the active service codes corresponding to services offered by the Hotel, please reffer to the following table: </h3></center>
<form action = "displayservicesbytype.php" method="get">
    <br>
        <center style="color:white;"> Service Type:
            <input type="text" name="search1" size="48">
            </br>
    <br>

            <input type="submit" value="submit">
            <input type="reset" value="Reset">
        </center>
        <br>

</form>


<?php

echo 'Hotel Service Mapping:';

include("DBConnection.php");

$sql = "SELECT * from Hotel.Service";
$result = mysqli_query($con,$sql);

?>
<br>
<table border="2" align="left" cellpadding="5" cellspacing="5">
    <tr>
        <th style="color:white;">Service ID </th>
        <th style="color:white;">Service Description</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["service_id"]; ?></td>
            <td style="color:white;"><?php echo $row["service_descr"]; ?></td>
        </tr>
        <?php
    }
?>
</body>
</html>



