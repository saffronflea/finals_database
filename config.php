<?php
// Database credentials. Assuming you are running MySQL
// server with default setting (user 'root' with no password)
$dbServer = 'localhost'; // Change this to your MySQL server hostname or IP address
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'finals_database';

// Attempt to connect to MySQL database
$link = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>