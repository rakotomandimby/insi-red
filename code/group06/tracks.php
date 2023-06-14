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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Tracks</title>
</head>
<body>
  <?php
  //Récupération des noms de tous les tracks
  $sql = "SELECT Name from Track";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {

    //Affiche les noms des tracks
    echo '<h1>Liste des Tracks :</h1>';
    echo '<ul>';
    while($row = mysqli_fetch_assoc($result)) {
      echo "<li>" . $row["Name"]. "</li>";
    }
    echo '</ul>';
  } else {
    echo 'Pas de résultat!';
  }

  mysqli_close($conn);
  ?>
  
</body>
</html>
