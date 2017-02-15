<?php

$servername = "localhost";
$username="root";

$password="";
$dbname = "project";
$thetable="Biological";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO $thetable (Bstratummax,Bx,B_y,Blarvalstage,Bspecies,Babundancy,BstationID,Stations_Name)
VALUES (11,12,13,'first','a sea bug',666,'dd',12)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 