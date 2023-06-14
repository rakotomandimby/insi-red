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
<!DOCTYPE html>
<html>
<head>Afficher la table users</head>
<body>
 <h1>Liste des utilisateurs</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Name</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['Id']); ?></td>
       <td><?php echo htmlspecialchars($row['Name']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>

