<?php
$connect = new PDO("mysql:host=localhost;dbname=u815129216_sbmjc", "u815129216_sbmjc", "4Vr91wEt/");

?>
<?php
	
	// Database configuration 
	$dbHost     = "localhost"; 
	$dbUsername = "u815129216_sbmjc"; 
	$dbPassword = "4Vr91wEt/"; 
	$dbName     = "u815129216_sbmjc"; 
	 
	// Create database connection 
	$con = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
	 
	// Check connection 
	if ($con->connect_error) { 
	    die("Connection failed: " . $con->connect_error); 
	}

    
?>
