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
$sql = "SELECT Name FROM Track";
$resultat = mysqli_query($conn, $sql);

if(mysqli_num_rows($resultat) > 0){
  echo "<h1>Liste des Tracks : </h1>";
  echo "<ul>";
  while($row = mysqli_fetch_assoc($resultat)){
    echo "<li>".$row['Name']."</li>";
  }
  echo "</ul>";
}else{
  echo "Accun resultat";
}
mysqli_close($conn);

?>
