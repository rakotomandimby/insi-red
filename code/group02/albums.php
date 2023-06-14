<?php
$servername = "vps-2018.rktmb.org";
$username = "insi";
$password = "insi";
$database = "insi";
$port = 33306;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Albums</title>
    <style>
        .title {
            border: 2px solid blue;
            font-weight: bold;
            color: red;
            padding: 10px;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            color: blue;
        }

        th, td {
            border: 1px solid blue;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="title">Liste des Albums</div>

    <?php
    // Exécuter la requête SELECT
    $result = $conn->query("SELECT * FROM Album");

    // Vérifier s'il y a des résultats
    if ($result->num_rows > 0) {
        echo "<h2>Liste des Albums :</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th style='color: red;'>Titre de l'Album</th>";
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nom_Album'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun Album trouvé.";
    }

    // Fermer la connexion
    $conn->close();
    ?>
</body>
</html>
