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
// echo "Connected successfully";
$sql = "SELECT Name FROM Artist";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    echo '<h1>Liste des Artistes : </h1>';
    echo '<table>';
    
        echo '<thead>';
            echo'<tr>';
              echo '<th>ID</th>';
              echo '<th>Name</th>';
            echo'</tr>';
        echo '</thead>';
        echo '<tbody>';
              echo '<tr>';
              while($row = mysqli_fetch_assoc($result)){echo "<td> " . $row["Name"]. "</td>";}
              echo '</tr>';
        echo '<tbody>';

    echo '</table>';
  } else {
    echo "0 results";
}
mysqli_close($conn);

?>
<!-- <!DOCTYPE html>
<html>
<head>Afficher la table users</head>
<body>
 <h1>Liste des utilisateurs</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Name</th>
     </tr>
   </thead>
   <tbody>
     <tr>
   
     </tr>
     
   </tbody>
 </table>
</body> -->

