<?php
$host = "localhost"; // Change if hosted remotely
$user = "root"; // Change to your database username
$pass = ""; // Change to your database password
$db_name = "penjualan"; // Your database name

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set character encoding to UTF-8
mysqli_set_charset($conn, "utf8");

?>