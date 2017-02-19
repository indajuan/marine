<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">

    <title>Get data</title>

    <!-- Bootstrap core CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="excellentexport.js"></script>
<script type="text/javascript" src="excellentexport.min.js"></script>


  </head>


  <body>

    <?php
    include_once("header.php");
	?>

<div class="container">
  
  <div class="text-center">
    <h1>Marine</h1>
    <p class="lead">Selected data</p>
  </div>
</div>

<div class="container">

	<?php
		if(isset($_POST['submit'])){
		$table = $_POST['table'];
		if($table = 'station'){
			if(!empty($_POST['station_list'])) {
				// Counting number of checked checkboxes.
				$checked_count = count($_POST['station_list']);
				echo "<p>";
				echo "You have selected following stations ".$checked_count." option(s): <br/>";
				// Loop to store and display values of individual checked checkbox.
				foreach($_POST['station_list'] as $selected) {
					echo " - ".$selected . "";
					}
					echo "</p>";
				include("db.php");
				$name = $_POST['station_list'];
				$sql = "SELECT Sname AS Name, Slongitude AS Longitude, Slatitude AS Latitude
				FROM Stations
				WHERE Sname IN ('" . implode("','", $name) ."') AND Shidden = 0
				;
				";
				if (mysqli_query($conn, $sql)) {
				$result = mysqli_query($conn, $sql);
				$num = mysqli_num_rows($result);


				echo "<b>Stations</b><br>";
					echo "<table class=\"table\" id=\"datatable\">";
					echo "<thead>";
					echo "<tr><th>Station name</th><th>Longitude</th><th>Latitude</th></tr>";
					echo "</thead>";
					echo "<tbody>";
				    while($row = mysqli_fetch_assoc($result)) {
				        echo "<tr><td>" . $row["Name"]."</td>";
				        echo "<td>" . $row["Longitude"]."</td>";
				        echo "<td>" . $row["Latitude"]."</td></tr>";
				}
					echo "</tbody>";
					echo "</table>";
				mysqli_close($conn);

	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}
				else{
					echo "<b>No stations selected.</b> </p>";
				}
}

		if($table = 'physical'){
			if(!empty($_POST['station_forphysical'])) {

			if(!empty($_POST['depth_physical'])) {
				// Counting number of checked checkboxes.
				$checked_count = count($_POST['station_forphysical']);
				echo "<p>";
				echo "You have selected following stations ".$checked_count." option(s): <br/>";
				// Loop to store and display values of individual checked checkbox.
				foreach($_POST['station_forphysical'] as $selected) {
					echo " - ".$selected . "";
					}
					echo "</p>";
				$checked_count = count($_POST['depth_physical']);
				echo "<p>";
				echo "You have selected following depths ".$checked_count." option(s): <br/>";
				// Loop to store and display values of individual checked checkbox.
				foreach($_POST['depth_physical'] as $selected) {
					echo " - ".$selected . "";
					}
					echo "</p>";
				include("db.php");
				$station = $_POST['station_forphysical'];
				$depth = $_POST['depth_physical'];
				$sql = "SELECT Pstationname AS Name, Pdepth AS Depth, Ptemperature AS Temperature, Psalinity AS Salinity, POxygen AS Oxygen, Pfluorescence AS Fluorescence 
				FROM Physical
				WHERE Pstationname IN ('" . implode("','", $station) ."') AND Pdepth IN ('" . implode("','", $depth) ."') AND Phidden = 0
				ORDER BY Pdepth, Pstationname
				;
				";
				if (mysqli_query($conn, $sql)) {
				$result = mysqli_query($conn, $sql);
				$num = mysqli_num_rows($result);

				echo "<b>Physical samples</b><br>";
					echo "<table class=\"table\" id=\"datatable\">";
					echo "<thead>";
					echo "<tr><th>Station name</th><th>Depth</th><th>Temperature</th><th>Salinity</th><th>Oxygen</th><th>Fluorescence</th></tr>";
					echo "</thead>";
					echo "<tbody>";
				    while($row = mysqli_fetch_assoc($result)) {
				        echo "<tr><td>" . $row["Name"]."</td>";
				        echo "<td>" . $row["Depth"]."</td>";
				        echo "<td>" . $row["Temperature"]."</td>";
				        echo "<td>" . $row["Salinity"]."</td>";
				        echo "<td>" . $row["Oxygen"]."</td>";
				        echo "<td>" . $row["Fluorescence"]."</td></tr>";
				}
					echo "</tbody>";
					echo "</table>";
				mysqli_close($conn);

	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	}
	}
				else{
					echo "<b>No stations selected.</b> </p>";
				}
}


		if($table = 'biological'){
			if(!empty($_POST['station_forbiological'])) {

				// Counting number of checked checkboxes.
				$checked_count = count($_POST['station_forbiological']);
				echo "<p>";
				echo "You have selected following stations ".$checked_count." option(s): <br/>";
				// Loop to store and display values of individual checked checkbox.
				foreach($_POST['station_forbiological'] as $selected) {
					echo " - ".$selected . "";
					}
					echo "</p>";
				$checked_count = count($_POST['biological_stratummax']);
				echo "<p>";
				echo "You have selected following stratum ".$checked_count." option(s): <br/>";
				// Loop to store and display values of individual checked checkbox.
				foreach($_POST['biological_stratummax'] as $selected) {
					echo " - ".$selected . "";
					}
					echo "</p>";

				$checked_count = count($_POST['biological_larval']);
				echo "<p>";
				echo "You have selected following larvae ".$checked_count." option(s): <br/>";
				// Loop to store and display values of individual checked checkbox.
				foreach($_POST['biological_larval'] as $selected) {
					echo " - ".$selected . "";
					}
					echo "</p>";

				$checked_count = count($_POST['biological_species']);
				echo "<p>";
				echo "You have selected following species ".$checked_count." option(s): <br/>";
				// Loop to store and display values of individual checked checkbox.
				foreach($_POST['biological_species'] as $selected) {
					echo " - ".$selected . "";
					}
					echo "</p>";




				include("db.php");
				$station = $_POST['station_forbiological'];
				$stratum = $_POST['biological_stratummax'];
				$larva = $_POST['biological_larval'];
				$species = $_POST['biological_species'];
				$sql = "SELECT Bstationname AS Name, Bstratummax AS Stratum, Blarvastage AS LarvalStage, Bspecies AS Species, Babundance AS Abundance
				FROM Biological
				WHERE Bstationname IN ('" . implode("','", $station) ."') AND Bstratummax IN ('" . implode("','", $stratum) ."') AND Blarvastage IN ('" . implode("','", $larva) ."') AND Bspecies IN ('" . implode("','", $species) ."') AND Bhidden = 0
				ORDER BY Bstratummax, Bstationname, Blarvastage, Babundance
				;
				";
				if (mysqli_query($conn, $sql)) {
				$result = mysqli_query($conn, $sql);
				$num = mysqli_num_rows($result);

				echo "<b>Physical samples</b><br>";
					echo "<table class=\"table\" id=\"datatable\">";
					echo "<thead>";
					echo "<tr><th>Station name</th><th>Stratum</th><th>Larval Stage</th><th>Species</th><th>Abundance</th></tr>";
					echo "</thead>";
					echo "<tbody>";
				    while($row = mysqli_fetch_assoc($result)) {
				        echo "<tr><td>" . $row["Name"]."</td>";
				        echo "<td>" . $row["Stratum"]."</td>";
				        echo "<td>" . $row["LarvalStage"]."</td>";
				        echo "<td>" . $row["Species"]."</td>";
				        echo "<td>" . intval($row["Abundance"])."</td></tr>";
				}
					echo "</tbody>";
					echo "</table>";
				mysqli_close($conn);

	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
}

}


	?>

<a download="somedata.csv" href="#" onclick="return ExcellentExport.csv(this, 'datatable');">Export to CSV</a>

  
</div><!-- /.container -->


  </body>
</html>
