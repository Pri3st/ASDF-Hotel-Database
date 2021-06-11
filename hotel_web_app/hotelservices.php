<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" type="text/css" href="button.css">
	</head>
<a href="index.html" class="button">Back</a>
<center><h2 style = "color:white;">Service Type</h2></center>

<?php

echo 'Service Queries Result:';

include("DBConnection.php");

$sql = "SELECT * from Hotel.service";
$result = mysqli_query($con,$sql);

?>
<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
        <th style="color:white;">Service ID </th>  
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

</body>
</html>


