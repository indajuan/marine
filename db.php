<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "marine";
	$connection = new mysqli($hostname, $username, $password, $database)
	or die("Could not open connection to database");
?>