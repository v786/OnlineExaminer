<?php
	$servername =      "localhost";
	$username   =           "root";
	$password   =          "sqlpass";
	$db         = "OnlineExaminer";
	
	$conn = new mysqli($servername, $username, $password, $db);
	
	if($conn->connect_error) {
		die("Connection to database failed: " . $conn->connect_error);
	}

	echo "<br>";
?>