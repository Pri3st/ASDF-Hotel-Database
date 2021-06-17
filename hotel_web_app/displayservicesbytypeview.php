<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="servicesbytypeview.php" class="button">Back</a>
        <head>
                <link rel="stylesheet" type="text/css" href="button.css">
        </head>
<center><h2 style="color:white;">Customers Who Received the Service</h2></center>
<br>

<?php
include("DBConnection.php");
session_start();
$search1 = $_REQUEST["search1"];

$query = "SELECT ServicesbyTypeView.nfc_id, ServicesbyTypeView.service_descr, ServicesbyTypeView.service_id
          FROM ServicesbyTypeView
          WHERE ServicesbyTypeView.service_id='$search1'";

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
<tr>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<th style="color:white;">NFC ID</th>
<th style="color:white;">Service Description</th>
<tr/>

<?php
         while($row = mysqli_fetch_assoc($result)){
        ?>
                <tr>
                <td style="color:white;"><?php echo $row["nfc_id"];?> </td>
                <td style="color:white;"><?php echo $row["service_descr"];?> </td>
                </tr>
        <?php
        }
}
?>
</html>

