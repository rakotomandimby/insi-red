 <?php
$servername = "vps-2018.rktmb.org";
$username = "insi";
$password = "insi";
$database = "insi";
$port = 33066;

// Create connection
$conn = new PDO($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

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
foreach($resutl as $coco){
  echo "<li>".$coco['Name']."</li>";
}
echo "</ul>";