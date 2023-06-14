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


$sql = "SELECT * FROM Album";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table style="border-collapse: collapse; width: 70%;margin:0px auto;">';
    echo '<tr><th colspan="2" style="border: 1px solid black; padding: 8px; background-color: yellow;"><span style="color: red;">LISTE DES ALBUMS</span></th></tr>';
    echo '<tr><th style="border: 1px solid black; padding: 8px;"><span style="color: red;">CLASSEMENTS</span></th><th style="border: 1px solid black; padding: 8px;"><span style="color: red;">LES TITRES DES ALBUMS</span></th></tr>';

    $count = 1;
    while ($row = $result->fetch_assoc()) {
        echo '<tr><td style="border: 1px solid black; padding: 8px;"><span style="color: red;">' . $count . '</span></td><td style="border: 1px solid black; padding: 8px;">' . $row["Title"] . '</td></tr>';
        $count++;
    }

    echo '</table>';
} else {
    echo "Aucun album trouvé";
}

$conn->close();
?>
