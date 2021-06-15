<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="mostusedspacesbyagemonth.php" class="button">Back</a>
        <head>
                <link rel="stylesheet" type="text/css" href="button.css">
        </head>
<center><h2 style="color:white;">Most used Spaces by Selected Age Category This Month</h2></center>
<center><h4 style="color:white;">"Number of Distinct Visits" Column shows all the distinct visits that have been made to that specific Hotel Space, even if they have been made by the same Customer.</h4></center>
<center><h4 style="color:white;">Multiple visits made to a Hotel Space by the same Customer counts to the query result.</h4></center>
<br>

<?php
include("DBConnection.php");
session_start();
$search1 = $_REQUEST["search1"];

if ($search1!=1 && $search1!=2 && $search1!=3){
        echo "<div style ='color:white'>Wrong input</div>";
}

else if ($search1==1){ //cache

$query0 = "SELECT Space.space_id, COUNT(Visit.space_id) AS Freq, Space.space_name, Space.space_descr FROM Visit, Space, CustomerView WHERE CAST(Visit.entry_time as DATE)>'2021-05-31' AND Visit.nfc_id=CustomerView.nfc_id AND CustomerView.Age<41 AND Visit.space_id=Space.space_id GROUP BY Visit.space_id ORDER BY Freq DESC";

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
<th style="color:white;">Space ID</th>
<th style="color:white;">Number of Distinct Visits</th>
<th style="color:white;">Space Name</th>
<th style="color:white;">Space Description</th>
<tr/>

<?php
         while($row0 = mysqli_fetch_assoc($result0)){
        ?>
                <tr>
                <td style="color:white;"><?php echo $row0["space_id"];?> </td>
                <td style="color:white;"><?php echo $row0["Freq"];?> </td>
                <td style="color:white;"><?php echo $row0["space_name"];?> </td>
                <td style="color:white;"><?php echo $row0["space_descr"];?> </td>
                </tr>
        <?php
        }
}
}

else if ($search1==2){ //cache

$query1 = "SELECT Space.space_id, COUNT(Visit.space_id) AS Freq, Space.space_name, Space.space_descr FROM Visit, Space, CustomerView WHERE CAST(Visit.entry_time as DATE)>'2021-05-31' AND Visit.nfc_id=CustomerView.nfc_id AND CustomerView.Age>40 AND CustomerView.Age<60 AND Visit.space_id=Space.space_id GROUP BY Visit.space_id ORDER BY Freq DESC";

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
<th style="color:white;">Space ID</th>
<th style="color:white;">Number of Distinct Visits</th>
<th style="color:white;">Space Name</th>
<th style="color:white;">Space Description</th>
<tr/>

<?php
         while($row0 = mysqli_fetch_assoc($result1)){
        ?>
                <tr>
                <td style="color:white;"><?php echo $row0["space_id"];?> </td>
                <td style="color:white;"><?php echo $row0["Freq"];?> </td>
                <td style="color:white;"><?php echo $row0["space_name"];?> </td>
                <td style="color:white;"><?php echo $row0["space_descr"];?> </td>
                </tr>
        <?php
        }
}
}

else if ($search1==3){ //cache

$query2 = "SELECT Space.space_id, COUNT(Visit.space_id) AS Freq, Space.space_name, Space.space_descr FROM Visit, Space, CustomerView WHERE CAST(Visit.entry_time as DATE)>'2021-05-31' AND Visit.nfc_id=CustomerView.nfc_id AND CustomerView.Age>60 AND Visit.space_id=Space.space_id GROUP BY Visit.space_id ORDER BY Freq DESC";

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
<th style="color:white;">Space ID</th>
<th style="color:white;">Number of Distinct Visits</th>
<th style="color:white;">Space Name</th>
<th style="color:white;">Space Description</th>
<tr/>

<?php
         while($row0 = mysqli_fetch_assoc($result2)){
        ?>
                <tr>
                <td style="color:white;"><?php echo $row0["space_id"];?> </td>
                <td style="color:white;"><?php echo $row0["Freq"];?> </td>
                <td style="color:white;"><?php echo $row0["space_name"];?> </td>
                <td style="color:white;"><?php echo $row0["space_descr"];?> </td>
                </tr>
        <?php
        }
}
}
?>

</html>

