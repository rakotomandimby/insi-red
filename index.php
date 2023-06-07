<?php
    $servername = "vps-2018.rktmb.org";
    $username = "root";
    $password = "";
    $database = "insi";
    $port = 3306;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database, $port);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dossier</title>
    </head>
    <body>
        <h1>Bonjour</h1>
    </body>
    </html>

