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

    $id = 0;
    if(!empty($_GET['id'])){
        if($_POST['id']){
            $id = $_GET['id'];
            $sql = "DELETE FROM Artist WHERE Id = '.$id.' ";
            $resultat = $conn->query($sql);
            header("Location: artists.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un artist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <h1>Delete</h1>
            <form class="form-horizontal" action="delete_artist.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                Are you sure to delete?
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <a href="artists.php" class="btn"></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>