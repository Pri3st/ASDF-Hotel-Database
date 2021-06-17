<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="servicesbytype.php" class="button">Back</a>
<head>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>
<center><h2 style="color:white;">Customer who used Service <?php echo $_GET["search1"]; ?></h2></center>
<br>

<?php
include("DBConnection.php");
session_start();
$search1 = $_REQUEST["search1"];

$query = "SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Space.space_id, Space.space_name, Receive.charge_time
          FROM Customer, Service, Receive, Space, Visit, Provided
          WHERE CAST(Visit.exit_time as DATE)=CAST(Receive.charge_time as DATE) AND Service.service_id = '$search1' AND Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id AND Customer.nfc_id=Visit.nfc_id AND Visit.space_id=Space.space_id AND Service.service_id=Provided.service_id AND Provided.space_id=Space.space_id
          UNION ALL 
          SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Space.space_id, Space.space_name, Receive.charge_time
          FROM Customer, Service, Receive, Space, Access, Provided
          WHERE Service.service_id = '$search1' AND Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id AND Customer.nfc_id=Access.nfc_id AND Access.space_id=Space.space_id AND Service.service_id=Provided.service_id AND Provided.space_id=Space.space_id";

$result = mysqli_query($con,$query);

if ($search1 != 'B1' && $search1 != 'B2' && $search1 != 'R1' && $search1 != 'R2' && $search1 != 'R3' && $search1 != 'R4' && $search1 != 'G1' && $search1 != 'G2' && $search1 != 'G3' && $search1 != 'G4' && $search1 != 'H1' && $search1 != 'H2' && $search1 != 'H3'  && $search1 != 'Rm2' && $search1 != 'Rm4' && $search1 != 'R4' && $search1 != 'S1' && $search1 != 'S2' && $search1 != 'S3' && $search1 != 'W1' && $search1 != 'W2' && $search1 != 'W3'){
        echo "<div style ='color:white'>Wrong Input</div>";
}
else if(!$result ||  mysqli_num_rows($result)==0 ) {
        echo "<div style ='color:white'>No results were found</div>";
}
else
{
echo "<div style ='color:white'>The following results were found:</div>";
?>

<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
    <tr>
        <th style="color:white;">Customer NFC ID </th>
        <th style="color:white;">First Name</th>
        <th style="color:white;">Last Name</th>
        <th style="color:white;">Space ID</th>
        <th style="color:white;">Space Name</th>
        <th style="color:white;">Used at</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["nfc_id"]; ?></td>
            <td style="color:white;"><?php echo $row["first_name"]; ?></td>
            <td style="color:white;"><?php echo $row["last_name"]; ?></td>
            <td style="color:white;"><?php echo $row["space_id"]; ?></td>
            <td style="color:white;"><?php echo $row["space_name"]; ?></td>
            <td style="color:white;"><?php echo $row["charge_time"]; ?></td>
        </tr>
        <?php
        }
}
?>
</body>
</html>


