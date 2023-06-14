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
echo "Connected successfully";
$sql = "SELECT Name, Id FROM Artist";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	echo $row["Name"] . '   ' . $row["Id"] ; 
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<html>
    <head>
	<title>Liste des artistes</title>
    </head>
    <body>
	
    </body>
</html>
