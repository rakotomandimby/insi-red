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
// echo "Connected successfully";

$SQL= 'SELECT Title FROM Album';
$resultat= mysqli_query($conn,$SQL);
if(mysqli_num_rows($resultat) > 0){
  echo ' <h1>Liste des albums :</h1><ul>';
    while($row = mysqli_fetch_assoc($resultat)){
      echo "<li>".$row['Title']."</li>";
    }
  echo '</ul>';
}
else {
  echo "Nous n'avons trouve aucune ligne";
}

