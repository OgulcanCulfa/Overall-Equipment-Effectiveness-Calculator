<?php


$dbservername="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="oee";
$port = "3308";

$conn=mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbname,$port);

if (mysqli_connect_errno($conn)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



?>