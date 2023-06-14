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


$sql = "SELECT * FROM Artist";
$resultat = $conn->query($sql);

if ($resultat->num_rows > 0){
    echo '<ol>';

      while($row = $resultat->fetch_assoc()){
          echo '<li>'  .$row['Name'] . '</li>';
        }

    echo '</ol>';
}
 $dsn = "mysql:host=$host;dbname=$dbname"; 

$sql = "SELECT * FROM Artists";

try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }

// Check connection
// if ($dsn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

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
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['name']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>