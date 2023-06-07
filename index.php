 <?php
$servername = "vps-2018.rktmb.org";
$username = "insi";
$password = "insi";
$database = "insi";
$port = 33066;

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

$query=$connexion->prepare("SELECT * FROM Artist");
$query->execute();
$result=$query->fetchAll();
echo "<ul>";
foreach($result as $coco){
  echo "<li>".$coco['Name']."</li>";
}
echo "</ul>";