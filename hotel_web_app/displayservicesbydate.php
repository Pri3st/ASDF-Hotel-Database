<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
        <head>
                <link rel="stylesheet" type="text/css" href="button.css">
        </head>
<a href="servicesbydate.php" class="button">Back</a>        
<center><h2 style="color:white;">Hotel Services Provided to Customers at <?php echo $_GET["search1"]; ?></h2></center>
<br>

<?php
include("DBConnection.php");
session_start();
$search1 = $_REQUEST["search1"];

$query =  "SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Service.service_descr, 
Space.space_name, Space.space_descr
           FROM Customer, Visit, Space, Receive, Service, Provided
           WHERE CAST(Visit.entry_time as DATE)='$search1' AND Customer.nfc_id=Visit.nfc_id AND Visit.space_id=Space.space_id AND Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id AND Service.service_id=Provided.service_id AND Provided.space_id=Space.space_id";

$result = mysqli_query($con,$query);

if(!$result ||  mysqli_num_rows($result)==0 ) {
        echo "<div style ='color:white'>No results were found.</div>";
}
else
{

echo "<div style ='color:white'>The following results were found:</div>";
?>

<tr>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<th style="color:white;">Customer Bracelet ID</th>
<th style="color:white;">First Name</th>
<th style="color:white;">Last Name</th>
<th style="color:white;">Service Description</th>
<th style="color:white;">Space Name</th>
<th style="color:white;">Space Description</th>
<tr/>

<?php
         while($row = mysqli_fetch_assoc($result)){
        ?>
                <tr>
                <td style="color:white;"><?php echo $row["nfc_id"];?> </td>
                <td style="color:white;"><?php echo $row["first_name"];?> </td>
                <td style="color:white;"><?php echo $row["last_name"];?> </td>
                <td style="color:white;"><?php echo $row["service_descr"];?> </td>
                <td style="color:white;"><?php echo $row["space_name"];?> </td>
                <td style="color:white;"><?php echo $row["space_descr"];?> </td>
                </tr>
        <?php
        }
}
?>

</html>


