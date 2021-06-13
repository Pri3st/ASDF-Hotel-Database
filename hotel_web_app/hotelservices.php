<!DOCTYPE html>
<html>
<body bgcolor="1c1d26">
    <a href="index.html" class="button">Back</a>
<head>
    <h1 style="text-align: center; color: white;">Our Services</h1>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>

<br>
<?php
include("DBConnection.php");

$sql = "SELECT * from Hotel.Service";
$result = mysqli_query($con,$sql);

?>

<table border="2" align="center" cellpadding="5" cellspacing="5">
    <tr>
        <th style="color:white;">Service Name</th>
        <th style="color:white;">Service Description</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["service_id"]; ?></td>
            <td style="color:white;"><?php echo $row["service_descr"]; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</br>
<a href="index.html" class="button">Back</a>
</html>
