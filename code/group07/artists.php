<?php
// Requête pour récupérer les valeurs de la table
$sql = "SELECT * FROM Artist";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Name</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Name"] . "</td>"; 
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun résultat trouvé dans la table.";
}
?>
