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
echo "Connected successfully";


$sql = "SELECT * FROM Album";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<table style="border-collapse: collapse; width: 70%;margin:0px auto;">';
  echo '<tr><th style="border: 1px solid black; padding: 8px;">NUMERO</th><th style="border: 1px solid black; padding: 8px;">LES TITRES DES ALBUMS</th></tr>';
  
  $count = 1;
  while($row = $result->fetch_assoc()) {
    echo '<tr><td style="border: 1px solid black; padding: 8px;">' . $count . '</td><td style="border: 1px solid black; padding: 8px;">' . $row["Title"] . '</td></tr>';
    $count++;
  }
  
  echo '</table>';
} else {
  echo "Aucun artistes trouves";
}

$conn->close();
?>

