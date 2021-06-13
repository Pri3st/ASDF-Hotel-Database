<!DOCTYPE html>
<html>
<body bgcolor="1c1d26">
    <a href="index.html" class="button">Back</a>
<head>
    <h1 style="text-align: center; color: white;">Hotel Spaces</h1>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>

<br>
<?php
include("DBConnection.php");

$sql = "SELECT * from Hotel.Space";
$result = mysqli_query($con,$sql);

?>

<table border="2" align="center" cellpadding="5" cellspacing="5">
    <tr>
        <th style="color:white;">Space ID</th>
        <th style="color:white;">Space Name</th>
        <th style="color:white;">Space Description</th>
        <th style="color:white;">Bed Count</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["space_id"]; ?></td>
            <td style="color:white;"><?php echo $row["space_name"]; ?></td>
            <td style="color:white;"><?php echo $row["space_descr"]; ?></td>
            <td style="color:white;"><?php echo $row["bed_count"]; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</br>
<a href="index.html" class="button">Back</a>
</html>
