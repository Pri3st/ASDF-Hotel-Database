<?php
//Establishing connection with the database
$servername = "localhost";
$username = "sqlpri3st";
$password = "sqlpri3st4";
$database_name = "Hotel";

$con = mysqli_connect($servername,$username,$password,$database_name,"3306");
if (!$con){
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Database Initiated.";
}
//echo "Connected succesfully!";

?>
<br>
