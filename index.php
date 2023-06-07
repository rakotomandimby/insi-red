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
echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
';
foreach($result as $coco){
  echo "<li>".$coco['Name']."</li>";
}
echo "  
  </ul>
  </body>
  </html>
";
