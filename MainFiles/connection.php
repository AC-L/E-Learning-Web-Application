	<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    // Settings used to connect to the database:
    
    
    $servername = "mysql.cs.nott.ac.uk";
	$dbusername = "eaxac3";
	$dbpassword = "databasepassword1";
	$dbname = "eaxac3";
	    // Create connection
	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	    // Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
		
	echo "Connected successfully";

    ?>