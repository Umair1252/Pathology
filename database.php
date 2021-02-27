<?php
$dbHost ="localhost";
$dbUser ="root";
$dbPass ="";
$dbName ="pathology";

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$conn){
       die("Database Connection Failed!");
}
?>
