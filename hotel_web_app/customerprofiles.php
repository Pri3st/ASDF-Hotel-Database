<!DOCTYPE html>
<html>
<body bgcolor="1c1d26">
<head>
    <h1 style="text-align: center; color: white;">Τα Προιόντα μας!</h1>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>

<br>
<?php
include("DBConnection.php");

$sql = "SELECT * from Hotel.Customer";
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
        </tr>
        <?php
    }
    ?>
</table>
</br>
<a href="index.html" class="button">Back</a>
</html>
