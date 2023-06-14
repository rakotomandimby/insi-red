<?php
$servername = "vps-2018.rktmb.org";
$username = "insi";
$password = "insi";
$database = "insi";
$port = 33066;

// Create connection
try {
  $connexion = new PDO("mysql:host=$servername;dbname=$database;port= $port", $username, $password);
  // set the PDO error mode to exception
  $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  }
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}

include('artists.php');
