<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="servicesbycost.php" class="button">Back</a>
<head>
    <style>
      caption {
        background: blanchedalmond;
        color: darkblue;
      }
  </style>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>
<center><h2 style="color:white;">Results for Services that Cost <?php echo $_GET["search1"]; ?>€</h2></center>
<br>

<?php
include("DBConnection.php");
session_start();
$search1 = $_REQUEST["search1"];

$query1 = "SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Service.service_descr, Charge.charge_time, Charge.charge_descr, Space.space_name, Space.space_descr, Subscribe.subscr_time 
           FROM Customer, Receive, Service, Charge, Provided, Space, Subscription, Subscribe, Access 
           WHERE Customer.nfc_id=Receive.nfc_id AND Service.service_id=Charge.service_id AND Receive.charge_time=Charge.charge_time AND Service.service_id=Provided.service_id AND Provided.space_id=Space.space_id AND Service.service_id=Subscription.subscr_id AND Subscription.subscr_id=Subscribe.subscr_id AND Subscribe.nfc_id=Customer.nfc_id AND Customer.nfc_id=Charge.nfc_id AND Customer.nfc_id=Access.nfc_id AND Access.space_id=Space.space_id AND Charge.Ammount=$search1";
$query2 = "SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Service.service_descr, Charge.charge_time, Charge.charge_descr, Space.space_name, Space.space_descr 
           FROM Customer, Receive, Service, Charge, Provided, Space, Visit 
           WHERE CAST(Visit.exit_time as DATE)=CAST(Receive.charge_time as DATE) AND Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id AND Service.service_id=Charge.service_id AND Receive.charge_time=Charge.charge_time AND Service.service_id=Provided.service_id AND Provided.space_id=Space.space_id AND Customer.nfc_id=Charge.nfc_id AND Customer.nfc_id=Visit.nfc_id AND Visit.space_id=Space.space_id AND Service.service_id IN ('B1', 'B2', 'R1', 'R2', 'R3', 'R4', 'H1', 'H3') AND Charge.Ammount=$search1";

$result1 = mysqli_query($con,$query1);
$result2 = mysqli_query($con,$query2);

if ($search1 < 0){
        echo "<div style ='color:white'>Wrong Input</div>";
}
else if((!$result1 || mysqli_num_rows($result1)==0) && (!$result2 || mysqli_num_rows($result2)==0)) {
        echo "<div style ='color:white'>No results were found</div>";
}
else
{
echo "<div style ='color:white'>The following results were found:</div>";
?>

<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
    <caption style="center:left">Subscription Services:</caption>
    <tr>
        <th style="color:white;">Customer NFC ID </th>
        <th style="color:white;">First Name</th>
        <th style="color:white;">Last Name</th>
        <th style="color:white;">Service Description</th>
        <th style="color:white;">Charge Time</th>
        <th style="color:white;">Charge Description</th>
        <th style="color:white;">Space Name</th>
        <th style="color:white;">Space Description</th>
        <th style="color:white;">Subscription Time</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result1)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["nfc_id"]; ?></td>
            <td style="color:white;"><?php echo $row["first_name"]; ?></td>
            <td style="color:white;"><?php echo $row["last_name"]; ?></td>
            <td style="color:white;"><?php echo $row["service_descr"]; ?></td>
            <td style="color:white;"><?php echo $row["charge_time"]; ?></td>
            <td style="color:white;"><?php echo $row["charge_descr"]; ?></td>
            <td style="color:white;"><?php echo $row["space_name"]; ?></td>
            <td style="color:white;"><?php echo $row["space_descr"]; ?></td>
            <td style="color:white;"><?php echo $row["subscr_time"]; ?></td>
        </tr>
        <?php
    }
    ?>
<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
    <caption style="center:left;">Complimentary Services:</caption>
    <tr>
        <th style="color:white;">Customer NFC ID </th>
        <th style="color:white;">First Name</th>
        <th style="color:white;">Last Name</th>
        <th style="color:white;">Service Description</th>
        <th style="color:white;">Charge Time</th>
        <th style="color:white;">Charge Description</th>
        <th style="color:white;">Space Name</th>
        <th style="color:white;">Space Description</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result2)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["nfc_id"]; ?></td>
            <td style="color:white;"><?php echo $row["first_name"]; ?></td>
            <td style="color:white;"><?php echo $row["last_name"]; ?></td>
            <td style="color:white;"><?php echo $row["service_descr"]; ?></td>
            <td style="color:white;"><?php echo $row["charge_time"]; ?></td>
            <td style="color:white;"><?php echo $row["charge_descr"]; ?></td>
            <td style="color:white;"><?php echo $row["space_name"]; ?></td>
            <td style="color:white;"><?php echo $row["space_descr"]; ?></td>
        </tr>
        <?php
        }
}
?>
</body>
</html>


