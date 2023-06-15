<?php
require "bdd.php";
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
        <a href="artists.php" class="btn btn-primary">Lite des Artists</a>

        <div class="table-responsive">
            <table class="table table-hover">
            <?php 
          
                if ($resultat->num_rows > 0){
                    while($row = $resultat->fetch_assoc()){
                        echo '<tr>';
                            echo '<td>' . $row['Name'].'<td>';
                            echo '<td>';
                                echo '<a class="btn btn-primary mx-3" href="update.php?id=' . $row['Id'] . '">Update</a>';
                                echo '<a class="btn btn-danger" href="Remove.php?id=' . $row['Id'] . '">Delete</a>';  
                            echo '<td>';
                        echo '</tr>';
                    }
                }
            ?>
            </table>
        </div>

      </div>
    </div>
</body>
</html>