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
  $resultat=$result->fetchAll();
  var_dump($resultat);

//   if ($resultat->rowCount() > 0) {
//     echo "<ul>";
    
//     // Afficher les résultats
//     foreach($resultat as $row ) {
//         echo "<li>" . $row['Name'] . "</li>";
//     }

//     echo "</ul>";
// } else {
//     echo "Aucun résultat trouvé dans la table.";
// }
?>
</body>
</html>

