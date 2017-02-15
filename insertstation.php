<?php
	include 'db.php';
	
	$name = $_POST["name"];
	$sequence = $_POST["sequence"];
	$longitude = $_POST["longitude"];
	$latitude = $_POST["latitude"];
	
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$sql = "INSERT INTO `stations` (`SID`, `Sname`, `Ssequence`, `Slongitude`, `Slatitude`) VALUES (NULL, '".$name."', '".$sequence."', '".$longitude."', '".$latitude."');";
	
	if (mysqli_query($connection, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}

	include 'dbClose.php';
		
	print("You entered $name, $sequence, $longitude and $latitude");
	
?>