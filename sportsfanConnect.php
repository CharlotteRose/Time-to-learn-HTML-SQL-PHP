<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sportsfan";

$conn = mysqli_connect($servername, $username, $password, $database)or
die("The SportsFan Management system is down at this time. Please try again later or contact you network administrator." .mysqli_connect_error());
?>