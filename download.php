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
                    <h1>Marine</h1>
                    <p class="lead">Select data to download, it is only visible if it has a hidden value = 0, only admin can change this value.</p>
            </div>
            <b>Station data</b>
    <br>
	<form action="displayselectedbiological.php" method="post">
		Choose station:
		<select class="selectpicker" multiple data-actions-box="true" name = station_list[]>
			<?php 
				include 'db.php'; //establish database connection script
				$result = $conn->query("SELECT Sname from Stations WHERE Shidden = 0 order by Sname");
				while($row = $result->fetch_assoc()) {
					$station = htmlentities($row['Sname']); 
					print "<option selected name =\"station_list[] \" value = \"" . $station . "\">" . $station . "</option>"; 
				} 
				include 'closeDB.php';  //close database connection script
			?>
		</select>
			<input type="hidden" name = table value = "station">
		<br>
		<input type="submit" name="submit" Value="Submit"/>
		</form>

    <br>
    <br>

	<b>Physical data</b>
    <br>
	<form action="displayselectedbiological.php" method="post">
		Choose station: <select class="selectpicker" multiple data-actions-box="true"  name = station_forphysical[] id="station">
			<?php 
				include 'db.php'; //establish database connection script
				$result = $conn->query("SELECT DISTINCT(Pstationname) AS Pstationname FROM Physical 
										INNER JOIN Stations ON Pstationname = Sname 
										WHERE Shidden = 0 AND Phidden = 0 
										ORDER BY Pstationname");
				while($row = $result->fetch_assoc()) {
					$station = htmlentities($row['Pstationname']); 
					print "<option selected name =\"station_forphysical[] \" value = \"" . $station . "\">" . $station . "</option>"; 
				} 
				include 'closeDB.php';  //close database connection script
			?>
		</select>
		<br>
		<br>

	Filter by depth:<select class="selectpicker" multiple data-actions-box="true" name = depth_physical[] id="depth">
			<?php 
				include 'db.php'; //establish database connection script
				$result = $conn->query("SELECT DISTINCT Pdepth FROM Physical
										INNER JOIN Stations ON Pstationname = Sname 
										WHERE Shidden = 0 AND Phidden = 0 
										ORDER BY Pdepth");
				while($row = $result->fetch_assoc()) {
					$physical = htmlentities($row['Pdepth']); 
					print "<option selected name =\"depth_physical[] \" value = \"" . $physical . "\">" . $physical . "</option>"; 
				} 
				include 'closeDB.php';  //close database connection script
			?>
		</select>
			<input type="hidden" name = table value = "physical">
		<br>
		<input type="submit" name="submit"  Value="Submit"/>
		</form>

    <br>
    <br>
	<b>Biological variables:</b> 
    <br>			
	<form action="displayselectedbiological.php" method="post">
		Choose station: <select class="selectpicker" multiple data-actions-box="true" name = station_forbiological[]>
			<?php 
				include 'db.php'; //establish database connection script
				$result = $conn->query("SELECT DISTINCT Bstationname FROM Biological 
										INNER JOIN Stations ON Bstationname = Sname
										WHERE Bhidden = 0 AND Shidden = 0
										ORDER BY Bstationname");
				while($row = $result->fetch_assoc()) {
					$station = htmlentities($row['Bstationname']); 
					print "<option selected name =\"station_forbiological[] \" value = \"" . $station . "\">" . $station . "</option>"; 
				} 
				include 'closeDB.php';  //close database connection script
			?>
		</select>



		<br>
		<br>
		Filter by stratum: <select class="selectpicker" multiple data-actions-box="true" name = biological_stratummax[]> Biological variables
			<?php 
				include 'db.php'; //establish database connection script
				$result = $conn->query("SELECT DISTINCT Bstratummax FROM Biological
										INNER JOIN Stations ON Bstationname = Sname
										WHERE Bhidden = 0 AND Shidden = 0
										ORDER BY Bstratummax");
				while($row = $result->fetch_assoc()) {
					$physical = htmlentities($row['Bstratummax']); 
					print "<option selected name =\"biological_stratummax[] \" value = \"" . $physical . "\">" . $physical . "</option>"; 
				} 
				include 'closeDB.php';  //close database connection script
			?>
		</select>

		Filter by larval stage: <select class="selectpicker" multiple data-actions-box="true" name = biological_larval[]> Biological variables
			<?php 
				include 'db.php'; //establish database connection script
				$result = $conn->query("SELECT DISTINCT Blarvastage FROM Biological 
										INNER JOIN Stations ON Bstationname = Sname
										WHERE Bhidden = 0 AND Shidden = 0
										ORDER BY Blarvastage");
				while($row = $result->fetch_assoc()) {
					$physical = htmlentities($row['Blarvastage']); 
					print "<option selected name =\"biological_larval[] \" value = \"" . $physical . "\">" . $physical . "</option>"; 
				} 
				include 'closeDB.php';  //close database connection script
			?>
		</select>
		
		Filter by species: <select class="selectpicker" multiple data-actions-box="true" name = biological_species[]> Biological variables
			<?php 
				include 'db.php'; //establish database connection script
				$result = $conn->query("SELECT DISTINCT Bspecies FROM Biological 
										INNER JOIN Stations ON Bstationname = Sname
										WHERE Bhidden = 0 AND Shidden = 0
										ORDER BY Bspecies");
				while($row = $result->fetch_assoc()) {
					$physical = htmlentities($row['Bspecies']); 
					print "<option  selected name =\"biological_species[] \" value = \"" . $physical . "\">" . $physical . "</option>"; 
				} 
				include 'closeDB.php';  //close database connection script
			?>
		</select>
			<input type="hidden" name = table value = "biological">
		<br>
		<input type="submit" name="submit"  Value="Submit"/>
		</form>

    </div><!-- /.container -->

    </body>
</html>
