<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="servicesbycost.php" class="button">Back</a>
<head>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>
<center><h2 style="color:white;">Services by Cost</h2></center>
<br>

<?php
include("DBConnection.php");
session_start();
$search1 = $_REQUEST["search1"];

$query = "SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Service.service_descr, Charge.charge_time, Charge.charge_descr, Charge.ammount, Space.space_name, Space.space_descr, Visit.entry_time, Visit.exit_time FROM Hotel.Customer, Hotel.Receive, Hotel.Service, Hotel.Charge, Hotel.Provided, Hotel.Space, Hotel.Visit WHERE Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id AND Service.service_id=Charge.service_id AND Receive.charge_time=Charge.charge_time AND Service.service_id=Provided.service_id AND Provided.space_id=Space.space_id AND Customer.nfc_id=Visit.nfc_id AND Visit.space_id=Space.space_id AND Customer.nfc_id=Charge.nfc_id AND Charge.Ammount=$search1";

$result = mysqli_query($con,$query);

if ($search1<0){
    echo "<div style ='color:white'>Wrong Input!</div>";
}
else if(!$result ||  mysqli_num_rows($result)==0 ) {
    echo "<div style ='color:white'>No results were found.</div>";
}
else
{
echo "<div style ='color:white'>The following results were found:</div>";
?>
<tr>
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <th style="color:white;">Customer NFC ID</th>
        <th style="color:white;">First Name</th>
        <th style="color:white;">Last Name</th>
        <th style="color:white;">Service Description</th>
        <th style="color:white;">Charge Time</th>
        <th style="color:white;">Charge Description</th>
        <th style="color:white;">Charge Ammount</th>
        <th style="color:white;">Space Name</th>
        <th style="color:white;">Space Description</th>
        <th style="color:white;">Entry Time</th>
        <th style="color:white;">Exit Time</th>
        <tr/>

        <?php
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td style="color:white;"><?php echo $row["nfc_id"];?> </td>
                <td style="color:white;"><?php echo $row["first_name"];?> </td>
                <td style="color:white;"><?php echo $row["last_name"];?> </td>
                <td style="color:white;"><?php echo $row["service_descr"];?> </td>
                <td style="color:white;"><?php echo $row["charge_time"];?> </td>
                <td style="color:white;"><?php echo $row["charge_descr"];?> </td>
                <td style="color:white;"><?php echo $row["ammount"];?> </td>
                <td style="color:white;"><?php echo $row["space_name"];?> </td>
                <td style="color:white;"><?php echo $row["space_descr"];?> </td>
                <td style="color:white;"><?php echo $row["entry_time"];?> </td>
                <td style="color:white;"><?php echo $row["exit_time"];?> </td>
            </tr>
            <?php
        }
        }
        ?>
</html>
