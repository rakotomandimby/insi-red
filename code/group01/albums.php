<?php
$servername = "vps-2018.rktmb.org";
$username = "insi";
$password = "insi";
$database = "insi";
$port = 33066;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Album";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  $count = 1;
  while($row = $result->fetch_assoc()) {
    echo $row["Title"];
    echo '<br/>';
  }
  echo '</table>';
} else {
  echo "Aucun albums trouves";
}

$conn->close();

echo "Connected successfully";

?>
