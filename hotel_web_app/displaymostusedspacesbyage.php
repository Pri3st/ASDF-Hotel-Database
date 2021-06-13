<!DOCTYPE HTML>
<html>
<body bgcolor="1c1d26">
<a href="mostusedspacesbyage.php" class="button">Back</a>
        <head>
                <link rel="stylesheet" type="text/css" href="button.css">
        </head>
<center><h2 style="color:white;">Most used Spaces by Age Category</h2></center>
<br>

<?php
include("DBConnection.php");
session_start();
$search1 = $_REQUEST["search1"];

if ($search1!=1 && $search1!=2 && $search1!=3){
        echo "<div style ='color:white'>Wrong input</div>";
}

else if ($search1==1){ //cache

$query0 = "SELECT Space.space_id, COUNT(Visit.space_id) AS Freq, Space.space_name, Space.space_descr FROM Visit, Space WHERE Visit.space_id=Space.space_id GROUP BY Visit.space_id ORDER BY Freq DESC LIMIT 2";

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
<th style="color:white;">Different Customer Visits</th>
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

$query1 = "SELECT Space.space_id, COUNT(Visit.space_id) AS Freq, Space.space_name, Space.space_descr FROM Visit, Space WHERE Visit.space_id=Space.space_id GROUP BY Visit.space_id ORDER BY Freq DESC LIMIT 2";

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
<th style="color:white;">Different Customer Visits</th>
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

$query2 = "SELECT Space.space_id, COUNT(Visit.space_id) AS Freq, Space.space_name, Space.space_descr FROM Visit, Space WHERE Visit.space_id=Space.space_id GROUP BY Visit.space_id ORDER BY Freq DESC LIMIT 2";

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
<th style="color:white;">Different Customer Visits</th>
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

