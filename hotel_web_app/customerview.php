<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
        <head>
                <meta charset="UTF-8">
                <link rel="stylesheet" href="bootstrap.css">
                <link rel="stylesheet" type="text/css" href="button.css">
        </head>
<a href="views.html" class="button">Back</a>

<center><h2 style = "color:white;">Customers Profiles Database View</h2></center>
</form>


<?php


include("DBConnection.php");

$sql = "SELECT * from CustomerView";
$result = mysqli_query($con,$sql);

?>

<table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
        <th style="color:white;">Bracelet ID</th>
        <th style="color:white;">First Name</th>
        <th style="color:white;">Last Name</th>
        <th style="color:white;">Age</th>
        </tr>
        <?php
                while($row=mysqli_fetch_assoc($result)){
                ?>
                        <tr>
                        <td style="color:white;"><?php echo $row["nfc_id"]; ?></td>
                        <td style="color:white;"><?php echo $row["first_name"]; ?></td>
                        <td style="color:white;"><?php echo $row["last_name"]; ?></td>
                        <td style="color:white;"><?php echo $row["Age"]; ?></td>
                        </tr>
                <?php
                }
?>
</table>
</br>
</html>

