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
$sql = "SELECT Name FROM Artist";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo '<h1>Liste des Artistes : </h1>';
    echo '<ul>';
    while($row = mysqli_fetch_assoc($result)) {
        echo "<li> " . $row["Name"]. "</li>";
    }
    echo '</ul>';
  } else {
    echo "0 results";
}

mysqli_close($conn);

?>
