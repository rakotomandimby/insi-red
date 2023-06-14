<?php
$servername = "vps-2018.rktmb.org";
$username = "insi";
$password = "insi";
$database = "insi";
$port = 33306;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM Artist";
$resultat = $conn->query($sql);

if ($resultat->num_rows > 0){
    echo '<ol>';

      while($row = $resultat->fetch_assoc()){
          echo '<li>'  .$row['Name'] . '</li>';
        }

    echo '</ol>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../Dossier_Tommy/css/bootstrap.min(1).css">
</head>
<body>
  
</body>
</html>