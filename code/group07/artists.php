<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artist</title>
</head>
<body>
  <?php
  $sql = "SELECT * FROM Artist";
  $result = $connexion->query($sql);
  if ($result->rowCount() > 0) {
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
</body>
</html>

