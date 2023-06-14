<?php
$servername = "vps-2018.rktmb.org";
$username = "insi";
$password = "insi";
$database = "insi";
$port = 33066;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT Name, ArtistId FROM Artist";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
	echo $row["Name"] . '   ' . $row["ArtistId"] ; 
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
<html>
    <head>
	<title>Liste des artistes</title>
    </head>
    <body>
	
    </body>
</html>
