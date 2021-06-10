<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" type="text/css" href="button.css">
	</head>
<a href="queriesgeneral.html" class="button">Back</a>
<center><h2 style = "color:white;">Service Type</h2></center>
<form action = "Displayagora.php" method="get">
<br>
<center style="color:white;">Service Cost(1-10):
<input type="text" name="search1" size="48">
</br>

<br>
<center style="color:white;">Service Day(1-31):
<input type="text" name="search2" size="48">
</br>

<br>
<center style="color:white;">Service Month(1-12):
<input type="text" name="search3" size="48">
</br>
</center>
<br>

<center style="color:white;">Service Year(2015-2021): 
<input type="text" name="search4" size="48">
<br></br>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</center>
<br>

</form>


<?php

echo 'Service Queries Result:';

include("DBConnection.php");

$sql = "SELECT * from hotel.service";
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


