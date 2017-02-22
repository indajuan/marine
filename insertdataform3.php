<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Download</title>
        <meta name="description" content="">
        <meta name="author" content="">
    </head>


  <body>

    <?php include_once("header.php");?>
	
<div class="container">
  
  <div class="text-center">
    <h1>New Station data</h1>
    <br>
	<form action="insert.php" method="post">
		Station name: <input type="text" name="Sname"><br>
		Station sequence: <input type="text" name="Ssequence"><br>
		Station longitude: <input type="text" name="Slongitude"><br>
		Station latitude: <input type="text" name="Slatitude"><br>
		
		<input type="Submit">
	</form>
  </div>
  
</div><!-- /.container -->

<div class="container">
  
  <div class="text-center">
    <h1>New Biological data</h1>
    <br>
	<form action="insert2.php" method="post">
		Choose station: <select class="selectpicker" multiple data-actions-box="false" name = station_forbiological[]>
			<?php 
				include 'db.php'; //establish database connection script
				$result = $conn->query("SELECT DISTINCT Bstationname FROM Biological ORDER BY Bstationname");
				while($row = $result->fetch_assoc()) {
					$station = htmlentities($row['Bstationname']); 
					print "<option selected name =\"station_forbiological[] \" value = \"" . $station . "\">" . $station . "</option>"; 
				} 
				include 'closeDB.php';  //close database connection script
			?>
		</select><br>
		Biological stratum min: <input type="text" name="Bstratummin"><br>
		Biological stratum max: <input type="text" name="Bstratummax"><br>
		Bx: <input type="text" name="Bx"><br>
		B_y: <input type="text" name="B_y"><br>
		Biological larva stage: <input type="text" name="Blarvastage"><br>
		Biological species: <input type="text" name="Bspecies"><br>
		Biological abundance: <input type="text" name="Babundance"><br>
		
		
		<input type="Submit">
	</form>
  </div>
  
</div><!-- /.container -->

<div class="container">
  
  <div class="text-center">
    <h1>New Physical data</h1>
    <br>
	<form action="insert3.php" method="post">

				Choose station: <select class="selectpicker" multiple data-actions-box="false"  name = station_forphysical[] id="station">
			<?php 
				include 'db.php'; //establish database connection script
				$result = $conn->query("SELECT DISTINCT(Pstationname) AS Pstationname FROM Physical ORDER BY Pstationname");
				while($row = $result->fetch_assoc()) {
					$station = htmlentities($row['Pstationname']); 
					print "<option selected name =\"station_forphysical[] \" value = \"" . $station . "\">" . $station . "</option>"; 
				} 
				include 'closeDB.php';  //close database connection script
			?>
		</select>
		<br>
		Physical depth: <input type="text" name="Pdepth"><br>
		Physical temperature: <input type="text" name="Ptemperature"><br>
		Physical salinity: <input type="text" name="Psalinity"><br>
		Physical oxygen: <input type="text" name="Poxygen"><br>
		Physical fluorescence: <input type="text" name="Pfluorescence"><br>
		
		
		<input type="Submit">
	</form>
  </div>
  
</div><!-- /.container -->

  </body>
</html>
