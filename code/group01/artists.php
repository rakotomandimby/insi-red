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

if ($resultat->num_rows > 0){
    echo '<ul>';

      while($row = $resultat->fetch_assoc()){
          echo '<li>'  .$row['Name'] . '</li>';
        }

    echo '</ul>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <div class="container">


       <div class="row">
          <h1>Crud</h1>
       </div>

       
       <div class="row">

          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Artists</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Ajouter</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Changer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Listes des artistes</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

       </div>


    </div>
</body>
</html>