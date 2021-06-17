<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="covid19tracking.php" class="button">Back</a>
<head>
    <style>
      caption {
        background: blanchedalmond;
        color: darkblue;
      }
  </style>
    <link rel="stylesheet" type="text/css" href="button.css">
</head>
<center><h2 style="color:white;">COVID-19 Tracking Results for Customer with NFC ID <?php echo $_GET["search1"]; ?></h2></center>
<br>

<?php
include("DBConnection.php");
session_start();
$search1 = $_REQUEST["search1"];

$query1 = "SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Visit.space_id, Visit.entry_time, Visit.exit_time, Space.space_descr
          FROM Customer, Visit, Space
          WHERE Customer.nfc_id = '$search1' AND Customer.nfc_id=Visit.nfc_id AND Visit.space_id=Space.space_id";
$query2 = "SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Access.space_id, Access.start_time, Access.end_time, Space.space_descr
          FROM Customer, Access, Space
          WHERE Customer.nfc_id = '$search1' AND Customer.nfc_id=Access.nfc_id AND Access.space_id=Space.space_id";

$result1 = mysqli_query($con,$query1);
$result2 = mysqli_query($con,$query2);

if ($search1<=0 || $search1>20){
        echo "<div style ='color:white'>Wrong Input</div>";
}
else if((!$result1 || mysqli_num_rows($result1)==0) && (!$result2 || mysqli_num_rows($result2)==0)) {
        echo "<div style ='color:white'>No results were found</div>";
}
else
{
echo "<div style ='color:white'>The following results were found:</div>";
?>

<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
    <caption style="center:left">Hotel Spaces Visited by Customer:</caption>
    <tr>
        <th style="color:white;">Customer NFC ID </th>
        <th style="color:white;">First Name</th>
        <th style="color:white;">Last Name</th>
        <th style="color:white;">Space ID</th>
        <th style="color:white;">Space Description</th>
        <th style="color:white;">Entry Time</th>
        <th style="color:white;">Exit Time</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result1)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["nfc_id"]; ?></td>
            <td style="color:white;"><?php echo $row["first_name"]; ?></td>
            <td style="color:white;"><?php echo $row["last_name"]; ?></td>
            <td style="color:white;"><?php echo $row["space_id"]; ?></td>
            <td style="color:white;"><?php echo $row["space_descr"]; ?></td>
            <td style="color:white;"><?php echo $row["entry_time"]; ?></td>
            <td style="color:white;"><?php echo $row["exit_time"]; ?></td>
        </tr>
        <?php
    }
    ?>
<br>
<table border="2" align="center" cellpadding="5" cellspacing="5">
    <caption style="center:left;">Hotel Places Where Customer Has Access To:</caption>
    <tr>
        <th style="color:white;">Customer NFC ID </th>
        <th style="color:white;">First Name</th>
        <th style="color:white;">Last Name</th>
        <th style="color:white;">Space ID</th>
        <th style="color:white;">Space Description</th>
        <th style="color:white;">Start Time</th>
        <th style="color:white;">End Time</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result2)){
        ?>
        <tr>
            <td style="color:white;"><?php echo $row["nfc_id"]; ?></td>
            <td style="color:white;"><?php echo $row["first_name"]; ?></td>
            <td style="color:white;"><?php echo $row["last_name"]; ?></td>
            <td style="color:white;"><?php echo $row["space_id"]; ?></td>
            <td style="color:white;"><?php echo $row["space_descr"]; ?></td>
            <td style="color:white;"><?php echo $row["start_time"]; ?></td>
            <td style="color:white;"><?php echo $row["end_time"]; ?></td>
        </tr>
        <?php
        }
}
?>
</body>
</html>


