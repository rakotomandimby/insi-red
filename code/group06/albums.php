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

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete_id"])) {
  $album_id = $_POST["delete_id"];

  $conn->query("SET FOREIGN_KEY_CHECKS=0");

  $sql_delete_tracks = "DELETE FROM Track WHERE AlbumId = '$album_id'";
  $conn->query($sql_delete_tracks);

  $sql_delete_album = "DELETE FROM Album WHERE AlbumId = '$album_id'";
  if ($conn->query($sql_delete_album) === TRUE) {
    echo "L'album a été supprimé avec succès.";
  } else {
    echo "Une erreur s'est produite lors de la suppression de l'album : " . $conn->error;
  }

  $conn->query("SET FOREIGN_KEY_CHECKS=1");
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update_id"]) && isset($_POST["new_title"])) {
  $album_id = $_POST["update_id"];
  $new_title = $_POST["new_title"];

  $sql_update_album = "UPDATE Album SET Title = '$new_title' WHERE AlbumId = '$album_id'";
  if ($conn->query($sql_update_album) === TRUE) {
    echo "L'album a été mis à jour avec succès.";
  } else {
    echo "Une erreur s'est produite lors de la mise à jour de l'album : " . $conn->error;
  }
}

$sql = "SELECT AlbumId, Title FROM Album";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Liste des albums</title>
  <style>
    .hidden {
      display: none;
    }
    
    ul {
      list-style-type: none;
      padding: 0;
    }
    
    li {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
      border: 2px solid #ccc;
      padding: 10px;
      border-radius: 5px;
    }
    
    .album-title {
      flex-grow: 1;
    }
    
    .btn-group {
      display: flex;
      gap: 10px;
    }
    
    .edit-button {
      background-color: #f44336;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
    }
    
    .edit-button:hover {
      background-color: #e53935;
    }
    
    .save-button {
      background-color: #2196F3;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 5px;
    }
    
    .save-button:hover {
      background-color: #1976D2;
    }
  </style>
  <script>
    function toggleEditField(albumId) {
      var editField = document.getElementById('edit_field_' + albumId);
      var editButton = document.getElementById('edit_button_' + albumId);
      var saveButton = document.getElementById('save_button_' + albumId);
      
      if (editField.classList.contains('hidden')) {
        editField.classList.remove('hidden');
        editButton.style.display = 'none';
        saveButton.style.display = 'inline-block';
      } else {
        editField.classList.add('hidden');
        editButton.style.display = 'inline-block';
        saveButton.style.display = 'none';
      }
    }
  </script>
</head>
<body>
  <?php
  if ($result->num_rows > 0) {
    echo "<h1>Liste des albums</h1>";
    echo "<ul>";
    
    while ($row = $result->fetch_assoc()) {
      echo "<li>
        <div class='album-title'>" . $row["Title"] . "</div>
        <div class='btn-group'>
          <form method='POST' action='".$_SERVER["PHP_SELF"]."'>
            <input type='hidden' name='delete_id' value='".$row["AlbumId"]."'>
            <input type='submit' value='Supprimer'>
          </form>
          <form method='POST' action='".$_SERVER["PHP_SELF"]."'>
            <input type='hidden' name='update_id' value='".$row["AlbumId"]."'>
            <input type='text' name='new_title' placeholder='Nouveau titre' class='hidden' id='edit_field_".$row["AlbumId"]."'>
            <input type='button' value='Modifier' onclick='toggleEditField(".$row["AlbumId"].")' id='edit_button_".$row["AlbumId"]."'>
            <input type='submit' value='Enregistrer' class='hidden save-button' id='save_button_".$row["AlbumId"]."'>
          </form>
        </div>
      </li>";
    }

    echo "</ul>";
  } else {
    echo "Aucun album trouvé.";
  }

  $conn->close();
  ?>
</body>
</html>
