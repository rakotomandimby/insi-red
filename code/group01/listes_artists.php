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


$sql = "SELECT * FROM Artist";
$resultat = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes d'artistes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <div class="row">

        <?php 
          
          if ($resultat->num_rows > 0){
                echo '<div class="col-md-6">';
                    while($row = $resultat->fetch_assoc()){
                        echo $row['Name'] ; 
                        echo '<br>';
                    }
                echo '</div>';
                echo '<div class="col-md-6">';
                    while($row = $resultat->fetch_assoc()){
                      echo '<a class="btn btn-danger mx-3" href="delete_artist.php?id = '. $row['Id'] .' " >Delete</a>'; echo '<a class="btn btn-warning mx-3" href="update_artist.php?id = '. $row['Id'] .' " >Update</a>'; echo '<br>'; 
                      echo '<br>';
                    }
                echo '</div>';
          }
        ?>

      </div>
    </div>
</body>
</html>