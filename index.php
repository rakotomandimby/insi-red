<?php
$servername = "vps-2018.rktmb.org";
$username = "root";
$password = "";
$database = "insi";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
