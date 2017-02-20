<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "marine";
	$conn = new mysqli($hostname, $username, $password, $database)
	or die("Could not open connection to database");
?>