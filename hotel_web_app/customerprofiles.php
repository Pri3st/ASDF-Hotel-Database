<!DOCTYPE html>
<html>
<body bgcolor="1c1d26">
<head>
    <h1 style="text-align: center; color: white;">List of Customers</h1>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>

<br>
<?php
include("DBConnection.php");

$sql = "SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Customer.id_type, Customer.id_num, Customer.id_auth, Customer.birthdate, Email.email_address FROM Hotel.Customer, Hotel.Email WHERE Hotel.Customer.nfc_id=Hotel.Email.nfc_id";
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
        <th style="color:white;">Email Address</th>
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
            <td style="color:white;"><?php echo $row["email_address"]; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</br>
<a href="index.html" class="button">Back</a>
</html>
