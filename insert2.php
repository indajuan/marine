<?php
$servername = "localhost";
$username="root";

$password="";
$dbname = "project";
$thetable="Biological";

//$database="moviedb";


$Bstratummax=$_POST['Bstratummax'];
 
$Bx=$_POST['Bx'];

$B_y=$_POST['B_y'];

$Blarvalstage=$_POST['Blarvalstage'];

$Bspecies=$_POST['Bspecies'];

$Babundancy=$_POST['Babundancy'];

$BstationID=$_POST['BstationID'];

$Stations_Name=$_POST['Stations_Name'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO $thetable (Bstratummax,Bx,B_y,Blarvalstage,Bspecies,Babundancy,BstationID,Stations_Name)
VALUES ($Bstratummax,$Bx,$B_y,$Blarvalstage,$Bspecies,$Babundancy,$BstationID,$Stations_Name)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>