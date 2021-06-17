<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="riskassessment.php" class="button">Back</a>
<head>
    <style>
      caption {
        background: blanchedalmond;
        color: darkblue;
      }
  </style>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>
<center><h2 style="color:white;">COVID-19 Risk Assessment for Hotel Customers</h2></center>
<center><h3 style="color:white;">(for Privacy Reasons, only the Bracelet ID is displayed)</h3></center>
<center><h3 style="color:white;">These are highly sensitive personal, medical-related data. Please handle with the utmost urgency and discretion.</h3></center>
<br>

<?php
include("DBConnection.php");
session_start();

$search1 = $_REQUEST["search1"];

$query1 = "SELECT DISTINCT nfc_id from Visit, (SELECT space_id, entry_time, exit_time FROM Visit WHERE nfc_id='$search1') AS positive WHERE (Visit.entry_time<addtime(positive.exit_time, '01:00:00') AND Visit.exit_time>positive.entry_time) AND Visit.space_id=positive.space_id AND nfc_id!='$search1'";

$result1 = mysqli_query($con,$query1);

if ($search1<1 || $search1>20){
        echo "<div style ='color:white'>Wrong Input</div>";
}
else if(!$result1 || mysqli_num_rows($result1)==0) {
        echo "<div style ='color:white'>No results were found</div>";
}
else
{
echo "<div style ='color:white'>The following results were found:</div>";
?>

<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
    <caption style="center:left">The following Customers are High Risk Contacts and Should be Tested:</caption>
    <tr>
        <th style="color:white;">Customer NFC ID </th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result1)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["nfc_id"]; ?></td>
        </tr>
        <?php
    }
}
?>

</body>
</html>


