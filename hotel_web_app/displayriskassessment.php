<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="covid19tracking.php" class="button">Back</a>
<head>
    <style>
      caption {
        background: blanchedalmond;
        color: darkblue;
      }
  </style>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>
<center><h2 style="color:white;">COVID-19 Risk Assessment for Hotel Customers</h2></center>
<br>

<?php
include("DBConnection.php");
session_start();
$search1 = $_REQUEST["search1"];

$query1 = "SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Visit.space_id, Visit.entry_time, Visit.exit_time, Space.space_descr
          FROM Customer, Visit, Space
          WHERE Customer.nfc_id = '$search1' AND Customer.nfc_id=Visit.nfc_id AND Visit.space_id=Space.space_id";

$result1 = mysqli_query($con,$query1);
?>

<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
    <caption style="center:left">The following Customers are High Risk Contacts and Should be Tested:</caption>
    <tr>
        <th style="color:white;">Customer NFC ID </th>
        <th style="color:white;">First Name</th>
        <th style="color:white;">Last Name</th>
        <th style="color:white;">Space ID</th>
        <th style="color:white;">Space Description</th>
        <th style="color:white;">Entry Time</th>
        <th style="color:white;">Exit Time</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result1)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["nfc_id"]; ?></td>
            <td style="color:white;"><?php echo $row["first_name"]; ?></td>
            <td style="color:white;"><?php echo $row["last_name"]; ?></td>
            <td style="color:white;"><?php echo $row["space_id"]; ?></td>
            <td style="color:white;"><?php echo $row["space_descr"]; ?></td>
            <td style="color:white;"><?php echo $row["entry_time"]; ?></td>
            <td style="color:white;"><?php echo $row["exit_time"]; ?></td>
        </tr>
        <?php
    }
    ?>

</body>
</html>


