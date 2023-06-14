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

  echo '<h1 style="color:red; border: 1px solid black; text-align:center; font-size:100px;">LISTE DES ARTISTS</h1>';
  echo '<ul>';
  foreach($resultat as $row){
    echo '<ol>'.$row['Name'].'</ol>';
  }
  echo '</ul>';
  
?>
</body>
</html>

