<?php
$servername = "localhost";
$username = "iwp_project"; 
$password = "12345"; 
$dbname = "iwp";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
//echo "Connected successfully"; // doar pt debug
?>