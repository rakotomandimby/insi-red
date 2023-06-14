<html>
    <head>
	<title>Liste des artistes</title>
    </head>
    <body>
	<ul>
	    <?
	    $servername = "vps-2018.rktmb.org";
	    $username = "insi";
	    $password = "insi";
	    $database = "insi";
	    $port = 33066;

	    // Create connection
	    $conn = mysqli_connect($servername, $username, $password, $database, $port);
	    // Check connection
	    if (!$conn) {
		die("Connection failed: " . $conn->connect_error);
	    }
	    echo "Connected successfully";

	    $sql = "SELECT Name, ArtistId FROM Artist";
	    $result = mysqli_query($conn, $sql);

	    while($row = mysqli_fetch_assoc($result)) {
	    ?>
		<li> <?=$row["Name"] ?> 
	    <?
	    }
	    mysqli_close($conn);
	    ?>
	</ul>
	
    </body>
</html>
