<!DOCTYPE html>
<html>
<body bgcolor="1c1d26">
    <a href="index.html" class="button">Back</a>
<head>
    <h1 style="text-align: center; color: white;">List of Customers</h1>
    <h1 style="text-align: center; color: white;">This is a list of all reservations which have been made so far in the Hotel.</h1>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>

<br>
<?php
include("DBConnection.php");

$sql = "SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Customer.id_type, Customer.id_num, Customer.id_auth, Customer.birthdate, Space.space_id, Space.bed_count, Access.start_time, Access.end_time FROM Hotel.Customer, Hotel.Space, Hotel.Access, Hotel.Charge WHERE Customer.nfc_id=Access.nfc_id AND Access.space_id=Space.space_id AND Customer.nfc_id=Charge.nfc_id AND Space.bed_count>0 AND Charge.service_id LIKE 'Rm%'";
$result = mysqli_query($con,$sql);

?>

<table border="2" align="center" cellpadding="5" cellspacing="5">
    <tr>
        <th style="color:white;">NFC ID</th>
        <th style="color:white;">First Name</th>
        <th style="color:white;">Last Name</th>
        <th style="color:white;">ID Document</th>
        <th style="color:white;">ID Number</th>
        <th style="color:white;">ID Authority</th>
        <th style="color:white;">Birthdate</th>
        <th style="color:white;">Room ID</th>
        <th style="color:white;">Beds</th>
        <th style="color:white;">Access Start Time</th>
        <th style="color:white;">Access End Time</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["nfc_id"]; ?></td>
            <td style="color:white;"><?php echo $row["first_name"]; ?></td>
            <td style="color:white;"><?php echo $row["last_name"]; ?></td>
            <td style="color:white;"><?php echo $row["id_type"]; ?></td>
            <td style="color:white;"><?php echo $row["id_num"]; ?></td>
            <td style="color:white;"><?php echo $row["id_auth"]; ?></td>
            <td style="color:white;"><?php echo $row["birthdate"]; ?></td>
            <td style="color:white;"><?php echo $row["space_id"]; ?></td>
            <td style="color:white;"><?php echo $row["bed_count"]; ?></td>
            <td style="color:white;"><?php echo $row["start_time"]; ?></td>
            <td style="color:white;"><?php echo $row["end_time"]; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</br>
<a href="index.html" class="button">Back</a>
</html>
