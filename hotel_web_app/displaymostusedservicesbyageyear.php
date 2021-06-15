<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="mostusedservicesbyageyear.php" class="button">Back</a>
        <head>
                <link rel="stylesheet" type="text/css" href="button.css">
        </head>
<center><h2 style="color:white;">Most used Services by Selected Age Category This Year.</h2></center>
<center><h4 style="color:white;">"Number of Distinct Uses" Column shows all the distinct uses that have been made of that specific Hotel Service, even if they have been made by the same Customer.</h4></center>
<center><h4 style="color:white;">Multiple uses of a Hotel Service by the same Customer count to the query result.</h4></center>
<br>

<?php
include("DBConnection.php");
session_start();
$search1 = $_REQUEST["search1"];

if ($search1!=1 && $search1!=2 && $search1!=3){
        echo "<div style ='color:white'>Wrong input</div>";
}

else if ($search1==1){ //cache

$query0 = "SELECT Service.service_id, COUNT(Service.service_id) AS Freq, Service.service_descr FROM Receive, Service, CustomerView WHERE CAST(Receive.charge_time as DATE)>'2019-12-30' AND Receive.nfc_id=CustomerView.nfc_id AND CustomerView.Age<41 AND Receive.service_id=Service.service_id AND Receive.service_id!='Rm2' AND Receive.service_id!='Rm4' GROUP BY Receive.service_id ORDER BY Freq DESC";

$result0 = mysqli_query($con,$query0);

if(!$result0 ||  mysqli_num_rows($result0)==0 ) {
        echo "<div style ='color:white'>No results were found.</div>";
}

else
{
echo "<div style ='color:white'>The following results were found:</div>";
?>
<tr>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<th style="color:white;">Service ID</th>
<th style="color:white;">Service Description</th>
<th style="color:white;">Frequency</th>
<tr/>

<?php
         while($row0 = mysqli_fetch_assoc($result0)){
        ?>
                <tr>
                <td style="color:white;"><?php echo $row0["service_id"];?> </td>
                <td style="color:white;"><?php echo $row0["service_descr"];?> </td>
                <td style="color:white;"><?php echo $row0["Freq"];?> </td>
                </tr>
        <?php
        }
}
}

else if ($search1==2){ //cache

$query1 = "SELECT Service.service_id, COUNT(Service.service_id) AS Freq, Service.service_descr FROM Receive, Service, CustomerView WHERE CAST(Receive.charge_time as DATE)>'2019-12-30' AND Receive.nfc_id=CustomerView.nfc_id AND CustomerView.Age>40 AND CustomerView.Age<61 AND Receive.service_id=Service.service_id AND Receive.service_id!='Rm4' AND Receive.service_id!='Rm2' GROUP BY Receive.service_id ORDER BY Freq DESC";

$result1 = mysqli_query($con,$query1);

if(!$result1 ||  mysqli_num_rows($result1)==0 ) {
        echo "<div style ='color:white'>No results were found.</div>";
}

else
{
echo "<div style ='color:white'>The following results were found:</div>";
?>
<tr>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<th style="color:white;">Service ID</th>
<th style="color:white;">Service Description</th>
<th style="color:white;">Frequency</th>
<tr/>

<?php
         while($row0 = mysqli_fetch_assoc($result1)){
        ?>
                <tr>
                <td style="color:white;"><?php echo $row0["service_id"];?> </td>
                <td style="color:white;"><?php echo $row0["service_descr"];?> </td>
                <td style="color:white;"><?php echo $row0["Freq"];?> </td>
                </tr>
        <?php
        }
}
}

else if ($search1==3){ //cache

$query2 = "SELECT Service.service_id, COUNT(Service.service_id) AS Freq, Service.service_descr FROM Receive, Service, CustomerView WHERE CAST(Receive.charge_time as DATE)>'2019-12-30' AND Receive.nfc_id=CustomerView.nfc_id AND CustomerView.Age>60 AND Receive.service_id=Service.service_id AND Receive.service_id!='Rm2' AND Receive.service_id!='Rm4' GROUP BY Receive.service_id ORDER BY Freq DESC";
$result2 = mysqli_query($con,$query2);

if(!$result2 ||  mysqli_num_rows($result2)==0 ) {
        echo "<div style ='color:white'>No results were found.</div>";
}

else
{
echo "<div style ='color:white'>The following results were found:</div>";
?>
<tr>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<th style="color:white;">Service ID</th>
<th style="color:white;">Service Description</th>
<th style="color:white;">Frequency</th>
<tr/>

<?php
         while($row0 = mysqli_fetch_assoc($result2)){
        ?>
                <tr>
                <td style="color:white;"><?php echo $row0["service_id"];?> </td>
                <td style="color:white;"><?php echo $row0["service_descr"];?> </td>
                <td style="color:white;"><?php echo $row0["Freq"];?> </td>
                </tr>
        <?php
        }
}
}
?>

</html>

