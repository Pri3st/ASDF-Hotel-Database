<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="servicesbytype.php" class="button">Back</a>
<head>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>
<center><h2 style="color:white;">Services By Type</h2></center>
<br>

<?php
include("DBConnection.php");
session_start();
$search1 = $_REQUEST["search1"];

$query = "SELECT Customer.nfc_id, Customer.first_name, Customer.last_name
          FROM Customer, Service, Receive
          WHERE Service.service_id = '$search1' AND Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id";

$result = mysqli_query($con,$query);
?>
<br>
<table border="2" align="left" cellpadding="5" cellspacing="5">
    <tr>
        <th style="color:white;">Customer NFC ID </th>
        <th style="color:white;">First Name</th>
        <th style="color:white;">Last Name</th>
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


