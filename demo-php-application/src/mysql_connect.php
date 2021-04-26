<?php
$servername = "mysql-service";
$username = "root";
$password = "mysql-pass";

// Create connection
$mysqli = new mysqli($servername, $username, $password);

// Check connection
if ($mysqli->connect_error) {
 die("Connection failed: " . $mysqli->connect_error);
}
?>
