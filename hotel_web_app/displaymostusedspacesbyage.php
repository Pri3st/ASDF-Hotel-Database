<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="mostusedspacesbyage.php" class="button">Back</a>
<head>
    <style>
      caption {
        background: blanchedalmond;
        color: darkblue;
      }
  </style>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>
<center><h2 style="color:white;">Most Used Spaces</h2></center>
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
    <caption style="center:left">Most Visited Hotel Spaces:</caption>
    <tr>
        <th style="color:white;">Space ID</th>
        <th style="color:white;">Space Name</th>
        <th style="color:white;">Space Description</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result1)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["space_id"]; ?></td>
            <td style="color:white;"><?php echo $row["space_name"]; ?></td>
            <td style="color:white;"><?php echo $row["space_descr"]; ?></td>
        </tr>
        <?php
    }
    ?>

</body>
</html>


