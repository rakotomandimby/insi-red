<?php
$host = "vps-2018.rktmb.org";
$username = "insi";
$password = "insi";
$dbname = "insi";
$port = 33066;

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
       <td><?php echo htmlspecialchars($row['Id']); ?></td>
       <td><?php echo htmlspecialchars($row['Name']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>