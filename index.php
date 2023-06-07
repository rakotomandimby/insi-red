 <?php
$servername = "vps-2018.rktmb.org";
$username = "insi";
$password = "insi";
$database = "insi";
$port = 33066;

// Create connection
try {
  $connexion = new PDO("mysql:host=$servername;dbname=insi;port= $port",$username, $password);
  // set the PDO error mode to exception
  $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  }
catch(PDOException $e)
  {
  echo "Connection failed: " . $e->getMessage();
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $requette=$connexion->prepare("SELECT * FROM Artist");
    $requette->execute();
    $query=$requette->fetchAll();
    echo "<ul>";
    foreach($query as $mt){
    echo "<li>".$mt['Name']."</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>