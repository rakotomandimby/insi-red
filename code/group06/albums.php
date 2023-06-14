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
?>

<!DOCTYPE html>
<html>
<head>
  <title>Liste des albums</title>
</head>
<body>
  <?php
  $sql = "SELECT Title FROM Album";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<h1>Liste des albums</h1>";
    echo "<ul>";
    
    while ($row = $result->fetch_assoc()) {
      echo "<li>" . $row["Title"] . "</li>";
    }

    echo "</ul>";
  } else {
    echo "Aucun album trouvé.";
  }

  $conn->close();
  ?>
</body>
</html>
